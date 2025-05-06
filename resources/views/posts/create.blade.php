<x-app-layout>

    <h1>Formulario para crear un nuevo post</h1>

    <form action="{{ route('posts.store') }}" method="POST">

    @csrf
        <label for="">
            Titulo:
            <input type="text" name="title">
        </label>
        <br>
        <br>
        <label for="">
            Slug:
            <input type="text" name="slug">
        </label>
        <br>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category">
        </label>
        <br>
        <br>
        <label for="">
            Contenido:
            <textarea name="content" id=""></textarea>
        </label>
        <br>
        <br>
        <button type="submit">CREAR POST</button>
        <a href="{{ route('posts.index') }}">CANCELAR</a>
    </form>
</x-app-layout>
