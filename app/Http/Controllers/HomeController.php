<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\SendWelcomeEmail;
use App\User;
use App\TypeFile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->file = $file;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TypeFile $file)
    {
        return view('home');
    }


    public function sendEmails()
    {
        (new SendWelcomeEmail())->dispatch()->onQueue('moises');
    }
}
