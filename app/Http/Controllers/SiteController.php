<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index () 
    {
        $name = 'Jeziel';
        $habits = ['ler', 'correr', 'estudar', 'Viajar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
