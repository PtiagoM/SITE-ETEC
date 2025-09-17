<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function processa(Request $request)
    {
        // Aqui poderíamos usar $request->input('nome') também
        var_dump($_GET);
    }
}
