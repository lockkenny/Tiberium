<?php

namespace App\Http\Controllers;

class WebController extends controller {
    public function index() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }
}