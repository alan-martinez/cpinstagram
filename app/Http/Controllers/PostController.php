<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        //Antes de mostrar index, verifica que el usuario este autenticado
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard');
    }
}
