<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to the homepage";
});

Route::get('/posts/{post}', function($post){
    return "Aqui se mostraran todos los posts {$post}";
});



//get
//post

//Peticiones de tipo POST solo que se manejan de forma diferente en Laravel.
//put
//patch
//delete
