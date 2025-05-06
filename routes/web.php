<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::resource('posts', PostController::class);

// Rutas necesarias para un CRUD
/*Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');*/

// Para cambiar el nombre de la variable asi como el nombre de las rutas
//Route::resource('articulos', PostController::class)->parameters(['articulos' => 'post'])->names('posts');

// Para realizar una ruta de un API
//Route::resource('posts', PostController::class)->except(['create', 'edit']);
//Route::apiResource('posts', PostController::class);

//get
//post

//Peticiones de tipo POST solo que se manejan de forma diferente en Laravel.
//put
//patch
//delete

Route::get('prueba', function () {

    /*
    $posts = Post::find(1);

    //return $posts->created_at->format('d-m-Y');
    //return $posts->created_at->diffForHumans();
    //return $posts->is_active;
    dd($posts->is_active);
    */

    /*
    // CREAR UN NUEVO REGISTRO
        $post = new Post;

        $post->title = "TiTuLo DE prueBA 4";
        $post->content = "Contenido de prueba 4";
        $post->category = "Categoria 4";
        $post->save();

        return $post;
    */

    /*
    // ACTUALIZAR UN REGISTRO
        //$post = Post::find(1);
        $post = Post::where('title', 'TITULO DE PRUEBA 2')->first();

        $post->category = "Desarrallo Web";
        $post->save();

        return $post;
    */

    /*
    // LISTAR TODOS LOS REGISTROS
        //$posts = Post::all();
        $posts = Post::get();
        //$posts = Post::orderBy('category')->get();
        //$posts = Post::where('id', '>=', '2')->get();
        //$posts = Post::orderBy('category')->select('id', 'title', 'category')->take(1)->get();

        return $posts;
    */

    /*
    // LISTAR UN REGISTRO
        $posts = Post::find(4);

        return $posts;
    */

    /*
    // ELIMNAR UN REGISTRO
        $post = Post::find(1);

        $post->delete();

        return "Registro eliminado exitosamente.";
    */
});
