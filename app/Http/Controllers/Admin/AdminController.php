<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\CertificateModel;
use App\User;
use App\Models\InstitutionsModel;
use App\Models\AnnouncementModel;
use App\Models\PostModel;
use App\Models\PaymentsModel;
use Illuminate\Http\Response;
use Carbon\Carbon;
use DB;
use Auth;
use Hash;
use Illuminate\Support\Facades\Log;
 
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');

    }
    
    public function index()
    {
        $count_user = DB::table('users')->count();
        $count_org = DB::table('users')->distinct()->count(['organization']);
        $count_cert = DB::table('certificate')->count();
        $count_searches = DB::table('search_records')->count();
        $cont = DB::table('contactus')->get();
       
        return view('admin.home', compact('count_user','count_org','count_cert','count_searches','cont'));
    } 

    public function certificates()
    {
        //$user_certificates = DB::table('certificate')->get();

        $user_certificates = DB::table('certificate')->get();

        return view('admin.certificates', compact('user_certificates'));
    } 

    public function create_user()
    {
        $inst = DB::table('institutions')->where('i_status','=','Active')->get();
        return view('admin.create_user', compact('inst'));
    }



    public function add_user(Request $request)
    {
         $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|numeric|digits_between:9,10',
            'gender' => 'required|max:255',
            'password' => 'required|min:6|confirmed',

         ]);

        $User = new User;

        $User->first_name = Input::get('first_name');
        $User->mid_name = Input::get('mid_name');
        $User->last_name = Input::get('last_name');
        $User->organization = Input::get('organization');
        $User->role_id = Input::get('role');
        $User->email = Input::get('email');
        $User->identity = 'Loading';
        $User->phone = Input::get('phone');
        $User->status = 'Verified';
        $User->gender = Input::get('gender');
        $User->password = Hash::make($request['password']); 

        $User->save();
        Log::info('Admin created a new user, user id: '.Auth::user()->id);
        return redirect('/admin/users')->with('success', 'User has been Registered Successfully!');

    }

        public function change_password($id)
    {

        $pass = User::find($id);
        $pass->password = Hash::make(Input::get('password'));
        $pass->save();
        Log::info('User changed password, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Password Changed Successfully!');
    }

    public function system_users()
    {
        $count_graduants = DB::table('users')->where('role_id','=','1')->count();
        $count_admins = DB::table('users')->where('role_id','=','2')->count();
        $count_officials = DB::table('users')->where('role_id','=','3')->count();
        $count_org = DB::table('users')->distinct()->count(['organization']);

        $user = DB::table('users')->join('roles', 'users.role_id', '=', 'roles.id')->select('first_name','mid_name','last_name','email','phone','gender','identity','organization','status','users.created_at','users.id','name')->get();

        return view('admin.system_users',compact('user','count_graduants','count_admins','count_org','count_officials'));
    }

        public function payments()
    {
        $payments = DB::table('payments')->get();
        $user = DB::table('users')->where('role_id',4)->distinct()->get(['organization']);

        return view('admin.payments',compact('payments','user'));
    }

        public function announcements()
    {
        $announcements = DB::table('announcements')->get();

        return view('admin.announcements', compact('announcements'));
    }

        public function create_announcement()
    {

        DB::table('announcements')->insert(
        array(
            'user_id'     =>   Input::get('user_id'), 
            'title'   =>    Input::get('title'),
            'contents'   =>    Input::get('contents'),
            'created_at'   =>    Carbon::now(),
            'updated_at'   =>    Carbon::now()
        ));

        Log::info('Admin created an announcement, user id: '.Auth::user()->id);

        return redirect()->back()->with('success', 'Announcement Published Successfully!');

    }

        public function messages()
    {
        $userslist = DB::table('users')->where('id', '!=' , Auth::user()->id)->get();

        $messages = DB::table('messages')->where('user_id',Auth::user()->id)->get();
        return view('admin.messages',compact('messages','userslist'));
    }


        public function profile()
    {
        return view('admin.profile');
    }


    public function search_records()
    {

        $sr = DB::table('search_records')->join('users', 'search_records.user_id', '=', 'users.id')->select('*')->get();
        Log::info('Admin viewed search records, user id: '.Auth::user()->id);
        return view('admin.search', compact('sr'));
    } 

        public function block($id)
    {
        $block = User::find($id);
        $block->status = 'Blocked' ;
        $block->save();
        Log::info('Admin blocked a user, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','User Blocked Successfully!');
    }

        public function unblock($id)
    {
        $unblock = User::find($id);
        $unblock->status = 'Verified' ;
        $unblock->save();
        Log::info('Admin unblocked a user, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','User Unblocked Successfully!');
    }

        public function block_inst($org_name)
    {
        $block = InstitutionsModel::find($org_name);
        $block->i_status = 'Blocked' ;
        $block->save();
        Log::info('Admin blocked an institution, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Institution Blocked Successfully!');
    }

        public function unblock_inst($org_name)
    {
        $unblock = InstitutionsModel::find($org_name);
        $unblock->i_status = 'Active' ;
        $unblock->save();
        Log::info('Admin unblocked an institution, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Institution Unblocked Successfully!');
    }


    public function institutions()
    {

        $inst = DB::table('institutions')->get();

        return view('admin.institutions', compact('inst'));
    } 


        public function reg_inst(Request $request)
    {
     $this->validate($request, [
            'name' => 'required',
            'contact' => 'required|max:10',
            'email' => 'required',
            'adress' => 'required',
         ]);
 
        InstitutionsModel::create([
            'org_name' => $request['name'],
            'contact' => $request['contact'],
            'email' => $request['email'],
            'adress' => $request['adress'],
        ]);
        Log::info('Admin registered an institution, user id: '.Auth::user()->id);
         return redirect()->back()->with('success','Institution Registered Successfully!');
    } 

public function pay(Request $request)
    {

         $this->validate($request, [
            'amount' => 'required|numeric',
            'fileuploaded' => 'required|mimes:pdf'
         ]);


        $file = $request['fileuploaded'];

        $pay = new PaymentsModel;

        $filename_renamed = Input::get('amount').'_'.Input::get('org').'_'.time();

        $pay->amount = Input::get('amount');
        $pay->user_id = Input::get('user_id');
        $pay->organization_name = Input::get('org');
        $pay->p_status = 'Verified';
        $pay->filename = $filename_renamed;
        $pay->save();
       
        $file->storeAs('/payments', $filename_renamed);

        Log::info('Admin created a payment record, user id: '.Auth::user()->id);

        return redirect()->back()->with('success', 'Payment recorded Successfully!'); 
        
    }

    
        public function unverify_pay($p_id)
    {
        $unver = PaymentsModel::find($p_id);
        $unver->p_status = 'Unverified' ;
        $unver->save();
        Log::info('Admin unverified a payment, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Payment Unverified Successfully!');
    }


public function org_pay(Request $request)
    {

         $this->validate($request, [
            'amount' => 'required|numeric',
            'fileuploaded' => 'required|mimes:pdf'
         ]);


        $file = $request['fileuploaded'];

        $pay = new PaymentsModel;

        $filename_renamed = Input::get('amount').'_'.Input::get('org').'_'.time();

        $pay->amount = Input::get('amount');
        $pay->user_id = Input::get('org');
        $pay->p_status = 'Unverified';
        $pay->filename = $filename_renamed;
        $pay->save();
       
        $file->storeAs('/payments', $filename_renamed);

        Log::info(Auth::user()->organization.'Organization made a payment, user id: '.Auth::user()->id);
      
        return redirect()->back()->with('success', 'Payment submitted, Successfully!'); 
        
    }



        public function verify_pay($p_id)
    {
        $verify = PaymentsModel::find($p_id);
        $verify->p_status = 'Verified' ;
        $verify->save();
        Log::info('Admin verified a payment, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Payment Unverified Successfully!');
    }

        public function view_pay($p_id)
    {

        $fyl = new PaymentsModel;

        $file_ob = $fyl->find($p_id);
    
        $filename= $file_ob->filename;

        $file = Storage::disk('local')->get('/payments/'.$filename);

        return (new Response($file, 200,['Content-Type'=> 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
    ]));
        Log::info('Admin viewed a bank slip, user id: '.Auth::user()->id);
    }

        public function delete($id){
        
        $cert = User::find($id);

        $cert->delete();

        Log::info('A user is deleted in the system, done by user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Deleted Successfully!');
        }

        public function delete_ann($id){
        
        $cert = AnnouncementModel::find($id);

        $cert->delete();

        Log::info('Announcement is deleted in the system, done by user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Deleted Successfully!');
        }
}
