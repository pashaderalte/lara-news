<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormReqest;
use App\Mail\ContactForm;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderBy("created_at", "DESC")->limit(3)->get();

        return view("welcome", [
            "posts" => $posts,
        ]);
    }

    public function showContactForm()
    {
        return view("mail.contact_form");
    }

    public function contactForm(ContactFormReqest $request)
    {
        Mail::to("blatny@first_app.com")->send(new ContactForm($request->validated()));

        return redirect(route("contacts"));
    }
}
