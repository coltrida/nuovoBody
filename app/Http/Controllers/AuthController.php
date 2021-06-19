<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class AuthController extends Controller
{
    public function index()
    {
        return view('adminPanel.index');
    }

    public function corsi()
    {
        return view('adminPanel.corsi');
    }
}
