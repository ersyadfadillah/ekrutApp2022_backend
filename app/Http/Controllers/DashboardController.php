<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  
    public function index()
    {
        return view('Dashboard.index');
    }

    public function posts()
    {
        return view('Posts.index');
    }

   
 
    
    
}
