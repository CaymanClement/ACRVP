<?php

namespace App\Http\Controllers\Organisation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\CertificateModel;
use App\User;
use App\Models\AnnouncementModel;
use App\Models\PaymentsModel;
use DB;
use Auth;
use Illuminate\Support\Facades\Log;

class OrgController extends Controller
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
        $count_vercert = CertificateModel::where('status','=','Verified')->count();
       
        return view('organisation.home', compact('count_user','count_org','count_cert','count_vercert'));
    } 

    public function certificates()
    {
        $user_certificates = DB::table('certificate')->get();
        Log::info('Organization viewed certificates records, user id: '.Auth::user()->id);
        return view('organisation.certificates', compact('user_certificates'));
    }



    public function system_users()
    {

        $count_graduants = DB::table('users')->where('role_id','=','1')->count();
        $count_admins = DB::table('users')->where('role_id','=','2')->count();
        $count_officials = DB::table('users')->where('role_id','=','3')->count();
        $count_org = DB::table('users')->distinct()->count(['organization']);

        $user = DB::table('users')->where('role_id','=','1')->get();

    return view('organisation.system_users',compact('user','count_graduants','count_admins','count_org','count_officials'));
    }

        public function payments()
    {
        //$payments = DB::table('payments')->where('user_id',Auth::user()->id)->get();
        $payments = DB::table('payments')->where('organization_name', Auth::user()->organization )->get();

        return view('organisation.payments',compact('payments'));
    }

        public function messages()
    {
        $userslist = DB::table('users')->where('id', '!=' , Auth::user()->id)->get();

        $messages = DB::table('messages')->where('user_id',Auth::user()->id)->get();
        return view('organisation.messages',compact('messages','userslist'));
    }


        public function profile()
    {
        return view('organisation.profile');
    }



}
