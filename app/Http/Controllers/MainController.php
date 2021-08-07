<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\data;
use App\user;

class MainController extends Controller
{
	public function registerindex()
	{
		return view('register.index');
	}
	public function loginindex()
	{
		return view('login.index');
	}
	public function homeindex()
	{
		return view('home.index');
	}
	public function insertdataindex()
	{
		return view('insertdata.index');
	}
	public function logout()
	{
		Session::flush();
        return redirect('/');
	}
	public function dataindex()
	{
		return view('data.index');
	}

    public function datarandom()
    {
    	$data=data::inRandomOrder()->limit(1)->get();
    	return view('data.randomdata',['randomdata'=>$data]);
    }

    //post
    public function registerpost(Request $request)
    {
    	$username=$request['username'];
    	$password=hash::make($request['password']);

    	$datacheck=user::where('username',$username)->first();
    	if ($datacheck==null) {
    		user::create(['username'=>$username,'password'=>$password]);
    		return redirect('/login');
    	}else{
    		echo "This Username already Use. back to the previous page.";
    	}
    }
    public function loginpost(Request $request)
	{
		$username=$request['username'];
		$password=$request['password'];
		$data=user::where('username',$username)->first();
		if (hash::check($password,$data['password'])) {
			 Session::put('username',$username);
			 return redirect('/home');
		}else{
			return back();
		}

	}
	public function insertdatapost(Request $request)
	{
		$hanzi=$request['hanzi'];
		$pinyin=$request['pinyin'];
		$arti=$request['arti'];
		$username=$request['username'];
		$status=$request['status'];
		$data=array(
			'hanzi'=>$hanzi,
			'pinyin'=>$pinyin,
			'arti'=>$arti,
			'username'=>$username,
			'status'=>'private',
		);
		data::create($data);
		return back();
	}
}
