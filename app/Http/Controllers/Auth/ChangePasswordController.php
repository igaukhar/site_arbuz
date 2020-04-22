<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ChangePasswordController extends Controller
{

    public function index() {
        return view('auth.passwords.change');
    }

    public function changepassword(Request $request)
    {
        $request->validate([
            'oldpassword' => ['required', new MatchOldPassword],
            'password' => ['required'],
            'password_confirmation' => ['same:password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);

        return redirect('login2')->with('success', 'Password Has Changed!');
    }

}
