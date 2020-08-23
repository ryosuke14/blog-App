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
        $inputs = $request->all();
        return view('contact', ['inputs' => $inputs]);
    }

    public function check(Request $request)
    {
        return view('check');
    }
}
