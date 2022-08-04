<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("home.home");
    }

    public function login()
    {
        return view("home.login");
    }

    public function about()
    {
        return view("home.about");
    }

    public function contact()
    {
        return view("home.contact");
    }
}
