<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index () 
    {
        $name = 'Jeziel';
        $habits = ['ler', 'correr', 'estudar', 'Viajar'];

        return view('home', compact('name', 'habits'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
