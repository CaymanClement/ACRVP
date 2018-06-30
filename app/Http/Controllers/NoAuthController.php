<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class NoAuthController extends Controller
{
        //Displays the homepage

        public function index()
    {
        $anno = DB::table('announcements')->get();

        return view('homepage',compact('anno'));
    }


    //contact us submit

        public function contactUSPost()

    {


        DB::table('contactus')->insert(
            array(
            'name'     =>   Input::get('name'),
            'email'     =>   Input::get('email'),
            'message'     =>   Input::get('message'), 
            'created_at'     =>   Carbon::now(),
            'updated_at'     =>  Carbon::now()
        ));
        
        return back()->with('success', 'Thanks for contacting us!');

    }
}
