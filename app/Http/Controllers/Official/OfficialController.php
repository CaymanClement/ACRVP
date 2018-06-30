<?php

namespace App\Http\Controllers\Official;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\CertificateModel;
use App\User;
use App\Models\AnnouncementModel;
use DB;
use Auth;
use Illuminate\Support\Facades\Log;

class OfficialController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');

    }

public function index()
    {
        $count_user = DB::table('users')->count();
        $count_org = User::where('role_id','=','4')->count();
        $count_cert = DB::table('certificate')->count();
        $count_vercert = CertificateModel::where('status','=','Verified')->count();
       
        return view('official.home', compact('count_user','count_org','count_cert','count_vercert'));
    } 

    public function certificates()
    {
        $user_certificates = DB::table('certificate')->where('school', Auth::user()->organization )->orderBy('created_at', 'DESC')->get();
        $count_cert = DB::table('certificate')->count();
        $count_vercert = CertificateModel::where('status','=','Collected')->count();
        $count_fake = CertificateModel::where('status','=','Not Collected')->count();

        return view('official.certificates', compact('user_certificates','count_cert','count_vercert','count_fake'));
    }

        public function fake($id)
    {
        $fake = CertificateModel::find($id);
        $fake->status = 'Not Collected' ;
        $fake->save();

        return redirect()->back()->with('success','Certificate Marked Fake Successfully!');
    }

        public function verify($id) 
    {
        $verify = CertificateModel::find($id);
        $verify->status = 'Collected' ;
        $verify->save();

        return redirect()->back()->with('success','Certificate Verified Successfully!');
    }


    public function system_users()
    {
        $count_graduants = DB::table('users')->where('role_id','=','1')->count();
        $count_admins = DB::table('users')->where('role_id','=','2')->count();
        $count_officials = DB::table('users')->where('role_id','=','3')->count();
        $count_org = DB::table('users')->distinct()->count(['organization']);

        $user = DB::table('users')->where('organization', Auth::user()->organization )->get();

        return view('official.system_users',compact('user','count_graduants','count_admins','count_org','count_officials'));
    }

        public function announcements()
    {
        $announcements = DB::table('announcements')->where('user_id',Auth::user()->id)->get();

        return view('official.announcements', compact('announcements'));
    }

        public function messages()
    {
        $userslist = DB::table('users')->where('id', '!=' , Auth::user()->id)->get();

        $messages = DB::table('messages')->where('user_id',Auth::user()->id)->get();
        return view('official.messages',compact('messages','userslist'));
    }

        public function profile()
    {
        return view('official.profile');
    }

        public function upload()
    {
        return view('official.upload');
    } 

    //Deletes the file from the record
        public function delete($id){
        
        $cert = CertificateModel::find($id);

        $cert->delete();
        Log::info('User deleted a certificate record, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Deleted Successfully!');
        }

        public function mark_collected($id)
    {
        $block = CertificateModel::find($id);
        $block->status = 'Collected' ;
        $block->save();
        Log::info('Admin marked certificate as collected, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Marked Collected Successfully!');
    }

        public function unmark_collected($id)
    {
        $block = CertificateModel::find($id);
        $block->status = 'Not Collected' ;
        $block->save();
        Log::info('Admin marked certificate as not collected, user id: '.Auth::user()->id);
        return redirect()->back()->with('success','Marked Not Collected Successfully!');
    }
}
