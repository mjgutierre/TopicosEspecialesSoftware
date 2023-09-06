<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class authController extends Controller
{
    public function signup(): View
    {
        return view('user.signup');
    }

    public function login(): View
    {
        return view('user.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect(route('home.index'))->with("success", "Login Success, now you can access the app");
        }
        return redirect(route('user.login'))->with("error", "Login unsuccessful");
    }

    public function signupPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if (!$user) {
            return redirect(route('user.signup'))->with("error", "Registration failed");
        }
        return redirect(route('user.login'))->with("success", "Registration Success, Login to access to the app");
    }

    public function logout()
    {
        return redirect(route('user.login'));
    }

    public function show(): View
    {
        $viewData = [];
        $viewData["title"] = "Users - Online Rocket Store";
        $viewData["users"] = User::all();
        return view('user.show')->with("viewData", $viewData);
    }

    public function index(string $id): View
    {
        $user = User::findOrFail($id);
        return view('user.profileindex', ['user' => $user]);
    }

    public function delete(string $id, Request $request):RedirectResponse
        {
            $user = User::findOrFail($id);        
            $user->delete();
            return redirect(route('user.show'))->with("success", "Account deleted successfully");
    }
}
