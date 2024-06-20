<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function mostrarFormularioRegistro()
    {
        return view('registro'); // Suponiendo que tu vista de registro se llama 'registro.blade.php'
    }
}
