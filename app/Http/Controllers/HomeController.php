<?php

namespace App\Http\Controllers;

use App\Models\cars;
use App\Models\Clients;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function cars(){
        return view("car-page");
    }

    public function index()
    {
        return view("home");
    }
    public function redirects()
    {
        $cars= cars::all();
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            return view('home', compact('cars'));
        }


    }


    public function sema() {
        $sema = cars::all();
        return view('home', compact('sema'));
    }

    public function semal() {
        $sema = cars::all();
        return view('pricing', compact('sema'));
    }

    

}
