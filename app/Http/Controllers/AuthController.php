<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Validator;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = array(
            // 'name'  => 'required|string|max:225',
            'email' => 'required|string|max:50',
            'password' => 'required|string|min:5',
        );

        $cek = Validator::make($request->all(),$rules);

        if($cek->fails()){
            $errorString = implode(",",$cek->messages()->all());
            return redirect()->route('login')->with('warning', $errorString);
        }else{
            if (Auth::attempt($request->only('email', 'password'))){
                $user = User::where('email', $request->email)->first();
               
                if($user->hasRole('admin')){
                    return redirect()->route('add');
                
                }else{
                    return redirect()->route('dashboardUser');
                }
            }else{
                return redirect()->route('login')->with('warning', "Email / Password Salah");
            }
        }
    }

    public function logout()
      {
          Auth::logout();
          return redirect()->route('login');
      }
  
      public function viewLogin()
      {
          return view('auth.login');
      }
}