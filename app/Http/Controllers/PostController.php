<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return "Aqui se mostraran todos los posts";
    }

    public function create(){
        return "Aqui se mostrara un formulario para crear post";
    }

    public function show($post){
        return "Aqui se mostrara el post {$post}";
    }
}
