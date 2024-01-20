<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    
    public function index(){
        // echo "This is method index";
        $data = User::get();
        return view('index', compact('data'));
    }
}
