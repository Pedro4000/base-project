<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request) {
        
        
        return view('home', [

        ]);
    }
}
