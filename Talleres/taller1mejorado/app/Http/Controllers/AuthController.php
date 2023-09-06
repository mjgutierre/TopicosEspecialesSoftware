<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


use App\Models\Profile;

class authController extends Controller
{
    public function signup(): View
    {
        return view('auth.signup');
    }

    public function signupPost(Request $request)
    {
        try {
            $profile = new Profile();
            $profile->validatesignupCredentials($request->all());

            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')), // Create the new profile
            ];

            Profile::create($data);

            return redirect(route('auth.login'))->with("success", "Registration Success, Login to access to the app");
        } catch (ValidationException $e) {
            return redirect(route('auth.signup'))->with("error", "Registration failed")->withErrors($e->validator->getMessageBag());
        }
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect(route('home.index'))->with("success", "Login Success, now you can access the app");
        }
        return redirect(route('auth.login'))->with("error", "Login unsuccessful");
    }
}
