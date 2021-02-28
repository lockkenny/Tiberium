<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class WebController extends controller {
    public function index() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }
}