<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class spptController extends Controller
{
    public function index()
    {
       return view('admin.sppt');
    }
}
