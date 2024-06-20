<?php
// app/Http/Controllers/IndexController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index'); // Asegúrate de tener una vista 'index.blade.php' en resources/views
    }
}
