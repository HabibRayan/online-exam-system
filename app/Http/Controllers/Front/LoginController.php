<?php

namespace App\Http\Controllers\Front;

use App\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
    public function login(){
        return view('front.login.login');
    }
    public function logs(Request $request){

        $this->validate($request,[
           'email' =>'required',
           'password' =>'required',
        ]);

        $data = [
            'password'=> $request->input('password'),
            'email'=>  $request->input('email')
        ];

        Auth::attempt($data);
        return redirect()->route('user');
    }
    public function logout(Request $request){
        auth()->guard('userWeb')->logout();


        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('login');
    }

    protected function loggedOut(Request $request)
    {
        //
    }

}
