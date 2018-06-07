<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        return View('home')
            ->with('title', '首頁')
            ->with('hello', '大家好～～');
    }
}
