<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
        // if( Auth::user() ) {
        //     Auth::user()->adminCheck();
        // }

        $user = Auth::user();
        $uid = $user->id;        
    }

    public function showProfile(){
    	$user = Auth::user();
        $uid = $user->id;
    	echo 'show profile of user id '.$uid;
    }

    public function showPersonalInfo(){
    	$user = Auth::user();
    	$data['user'] = $user;
    	return view('user.persona_info_form',$data);
    }

    public function PersonalInfoUpadte(){
    	//var_dump($_POST);
    	$file = array('image' => Input::file('profile_pic'));
    	$destinationPath = 'uploads'; // upload path
		$extension = Input::file('profile_pic')->getClientOriginalExtension(); // getting image extension
		$fileName = rand(11111,99999).'.'.$extension; // renameing image
		Input::file('profile_pic')->move($destinationPath, $fileName); // uploading file to given path
		// sending back with message
		// Session::flash('success', 'Upload successfully'); 
		// return Redirect::to('upload');
		echo 'successfully uploaded';
    }
}
