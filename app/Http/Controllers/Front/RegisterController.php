<?php

namespace App\Http\Controllers\Front;

use App\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('front.register.register');
    }
    public function registerStore(Request $request){

        $this->validate($request,[
            'user_name' => 'required | unique:registers,user_name',
            'first_name' => 'required',
            'last_name' => 'required',
            'miu_id' => 'required | unique:registers,miu_id',
            'email' => 'required | email | unique:registers,email',
            'password' => 'required | min:4 | confirmed',
        ]);


        $password = Hash::make($request->input('password'));
       Register::create([
//           $request->Hash::make($request->password),
            'user_name' =>$request->input('user_name'),
            'first_name' =>$request->input('first_name'),
            'last_name' =>$request->input('last_name'),
            'miu_id' =>$request->input('miu_id'),
            'email' =>$request->input('email'),
            'password' =>$password
        ]);


        return redirect('user');
    }
}
