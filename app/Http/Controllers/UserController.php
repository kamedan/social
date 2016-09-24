<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 24/09/2016
 * Time: 15:59
 */

namespace App\Http\Controllers;

use App\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users',
            'first_name' => 'required|alpha|max:120',
            'password' => 'required|min:4'
        ]);
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function getDashboard()
    {
        return view('dashboard');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return redirect()->route('dashboard');
        }else{
            return redirect()->back();
        }
    }
}