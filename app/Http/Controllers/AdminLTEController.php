<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLTEController extends Controller
{
    public function index($page="index.html")
    {
        switch ($page) {
        case "index.html":
           return view('AdminLTE.index');
        break;/*
        case "login.html":
           return view('AdminLTE.login');
        break;
        case "register.html":
           return view('AdminLTE.register');
        break;
        case "forgot-password.html":
           return view('AdminLTE.forgot-password');
        break;*/
        case "404.html":
           return view('AdminLTE.404');
        break;
        default:
             return view('AdminLTE.404');
        break;
       }
    }
}
