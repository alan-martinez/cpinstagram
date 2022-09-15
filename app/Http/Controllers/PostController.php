<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        //Antes de mostrar index, verifica que el usuario este autenticado
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('dashboard', [
            'user' => $user
        ]);
    }

    //Permite tener el formulario get para visualizar (create)
    public function create()
    {
        return view('posts.create');
    }

    //Permite almacenar en la BD (store)
    public function store(Request $request){
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'  
        ]);
    }
}
