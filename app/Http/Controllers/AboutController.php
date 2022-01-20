<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $clients = Clients::all();
        return view('about', compact('clients'));
    }
}
