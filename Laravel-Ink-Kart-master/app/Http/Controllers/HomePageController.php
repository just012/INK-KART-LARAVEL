<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HomePageController extends Controller
{
    //
    public function index(){
    return view('pages.HomePage');
    }
}
