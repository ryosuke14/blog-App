<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class AppController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(ContactRequest $request)
    {
        return view('contact');
    }

    public function check(Request $request)
    {
        return view('check');
    }

    public function blog(Request $request)
    {
        return view('blog.index');
    }

    public function blogpost(Request $request)
    {
        return view('blog.blogpost');
    }



}
