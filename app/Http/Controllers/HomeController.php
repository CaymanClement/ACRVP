<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
use App\Models\CertificateModel;
//use App;
//use App\Http\Requests;
use App\Models\ContactUS;
use App\Models\SearchModel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;

//use App\Http\Requests\CertificateUpoadRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Models\MessagesModel;
use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

use Collective\Html\Eloquent\FormAccessible;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */



    //Displays the upload certificate function

        public function upload_certificate()
    {

        $inst = DB::table('institutions')->where('i_status','=','Active')->get();

        return view('search',compact('inst'));
    }


    //Uploads certificate to the db

        public function upload(Request $request)
    {

         $this->validate($request, [
            'certificate_id' => 'required|numeric',
            'index_no' => 'required',
            'type' => 'required',
            'grade' => 'required',
            'year_from' => 'required|digits_between:4,4',
            'year_to' => 'required|digits_between:4,4',
            'fileuploaded' => 'required|mimes:pdf'

         ]);


        $file = $request['fileuploaded'];

        $Certificate = new CertificateModel;

        //$original_filename = $file->getClientOriginalName();
        //$mime = $file->getClientOriginalExtension();
        $filename_renamed = Input::get('type').'_'.Input::get('school').'_'.Input::get('certificate_id');

        $Certificate->certificate_id = Input::get('certificate_id');
        $Certificate->f_name = Input::get('fname');
        $Certificate->m_name = Input::get('mname');
        $Certificate->l_name = Input::get('lname');
        $Certificate->index_no = Input::get('index_no');
        $Certificate->school = Auth::user()->organization;
        $Certificate->type = Input::get('type');
        $Certificate->grade = Input::get('grade');
        $Certificate->year_from = Input::get('year_from');
        $Certificate->year_to = Input::get('year_to');
        $Certificate->uploader_id = Input::get('owner_id');
        $Certificate->filename = $filename_renamed;
        $Certificate->status = 'Not Collected';
        $Certificate->save();
       
        $file->storeAs('/certificates',$filename_renamed);

        Log::info('User uploaded a certificate record: '.Auth::user()->id);

        return redirect('/official/certificates')->with('success', 'Certificate is Uploaded Successfully!');
        
    }

    public function search_certificate()
    {
        $user_id = Input::get('user_id');
        $f_name = Input::get('fname');
        $m_name = Input::get('mname');
        $l_name = Input::get('lname');
        $index_no = Input::get('index_no');
        $school = Input::get('school');
        $type = Input::get('type');
        $grade = Input::get('grade');
        $year_from = Input::get('year_from');
        $year_to = Input::get('year_to');

        $cert_record = DB::table('certificate')->where('f_name',$f_name)->where('l_name', $l_name)->where('index_no', $index_no )->where('school', $school )->where('type', $type)->where('year_from', $year_from )->where('year_to', $year_to)->get();

        $search_record = DB::table('search_records')->where('user_id', $user_id)->where('reg_no', $index_no)->where('cert_type', $type)->get();
    

     Log::info(Auth::user()->first_name.'User searched for a certificate record: User id'.Auth::user()->id);

     if(count($search_record)>0){

        return redirect('/certificates')->with('warning', 'Sorry you already searched for a similar record!');
     }


     if( count($cert_record) > 0){
 
        DB::table('search_records')->insert(
        array(
            'user_id'     =>   Input::get('user_id'),
            'cert_id'     =>   '2', 
            'reg_no'     =>   Input::get('index_no'), 
            'institution'     =>   Input::get('school'),
            'cert_type'     =>   Input::get('type'),
            'year'   =>    Input::get('year_to'),
            'comment'   =>    'Found',
            'created_at'   =>    Carbon::now(),
            'updated_at'   =>    Carbon::now()
        ));

        return view('/certificates')->with('success', 'The Certificate record is found!');
        }

     else{

        DB::table('search_records')->insert(
        array(
            'user_id'     =>   Input::get('user_id'),
            'cert_id'     =>   '', 
            'reg_no'     =>   Input::get('index_no'), 
            'institution'     =>   Input::get('school'),
            'cert_type'     =>   Input::get('type'),
            'year'   =>    Input::get('year_to'),
            'comment'   =>    'Not Found',
            'created_at'   =>    Carbon::now(),
            'updated_at'   =>    Carbon::now()
        ));

        return redirect('/certificates')->with('failure', 'Sorry the Certificate record is not found!');

    }
        
    }



    //Displays the search records

        public function search_records()
    {

        $records = DB::table('search_records')->where('user_id',Auth::user()->id)->orderBy('search_records.created_at', 'DESC')->get();
 
        return view('certificates', compact('records'));
    
    }



//Displays the certfcates 

        public function view_cert($id)
    {

        $fyl = new CertificateModel;

        $file_ob = $fyl->find($id);
    
        $filename= $file_ob->filename;

        $file = Storage::disk('local')->get('/certificates/'.$filename);

        return (new Response($file, 200,['Content-Type'=> 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
    ]));

        Log::info('User viewed a certificate record: '.Auth::user()->id);

    }



    //Profile page

        public function profile()
    {
        $count = SearchModel::where('user_id', Auth::user()->id)->count(); 

        return view('profile',compact('count'));
    }


    //About us page

        public function about_us()
    {
        return view('about');
    }


        public function messages()
    {
        $userslist = DB::table('users')->where('id', '!=' , Auth::user()->id)->where('role_id','=','2')->get();

        $messages = DB::table('messages')->where('user_id',Auth::user()->id)->get();

        return view('messages',compact('messages','userslist'));
    }

        public function send_messages()

    {

        DB::table('messages')->insert(
        array(
            'user_id'     =>   Input::get('recipient'),
            'sender_id'     =>   Auth::user()->id,
            'sender'     =>   Input::get('sender'), 
            'subject'     =>   Input::get('subject'), 
            'content'     =>   Input::get('contents'),
            'status'     =>   'New',
            'created_at'     =>   Carbon::now(),
            'updated_at'     =>  Carbon::now()
        ));

        Log::info('User sent a message, user id: '.Input::get('sender'));

        return back()->with('success', 'Message sent Successfully!');

    }

        public function sent_messages()
    {
        $user = DB::table('users')->get();

        $messages = DB::table('messages')->where('sender_id', Auth::user()->id )->join('users', 'messages.user_id', '=', 'users.id')->select('first_name', 'mid_name', 'last_name', 'subject', 'content', 'messages.status', 'messages.created_at', 'messages.id')->get();

        return view('sent_messages', compact('messages','user'));
    }

        public function view_message($id)
    {

        $msg = MessagesModel::find($id);
        $msg->status = 'Read' ;
        $msg->save();

        $findmsg = DB::table('messages')->find($id);

        $userslist = DB::table('users')->where('id', '!=' , Auth::user()->id )->get();

        return view('view_message', compact('findmsg','userslist'));
    }

         public function payments()
    {
        $payments = DB::table('payments')->where('user_id',Auth::user()->id)->get();

        return view('payments',compact('payments'));
    }

     public function set_password($token){

       
            $password = Input::get('password');
            $confirm = Input::get('confirm');

            if($password == $confirm){

            $user = User::find($token);

            $user->password = Input::get('password');
            $user->status = 'active';
            $user->token = '';
            $user->save();
            Log::info('User changed password, user id: '.Auth::user()->id);
             return redirect('/')->with('success','Success! Please Login to continue');
             }
            else{

                return redirect()->back()->with('error','Make sure your password match!');
            }
       
     }

}
