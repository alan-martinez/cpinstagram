@extends('layouts.app')

@section('titulo')
    Página principal
@endsection

@section('contenido')
    {{-- x- es un componente de laravel --}}
    <x-listar-post :posts="$posts" />
@endsection