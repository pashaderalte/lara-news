<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function logout()
    {
        auth("web")->logout();

        return redirect(route("home"));
    }
    public function showRegisterForm() {
        return view('auth.register');
    }
    public function showForgotForm() {
        return view('auth.forgot');
    }
    public function showForgotCompleteForm() {
        return view('auth.forgot_complete');
    }
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if(auth("web")->attempt($data)) {

            return redirect(route("home"));
        }

        return redirect(route("login"))->withErrors(["email" => "Fisting ass - 300\$"]);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed"]
        ]);

        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if($user) {
            //event(new Registered($user));

            auth("web")->login($user);
        }

        return redirect(route("home"));
    }
    public function forgot(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email"]
        ]);

        $user = User::where(["email" => $data["email"]])->first();

        if(!is_null($user)) {
            $password = uniqid();

            $user->password = bcrypt($password);
            $user->save();

            Mail::to($user)->send(new ForgotPassword($password));
        }

        return redirect(route("forgot_complete"));
    }




}
