<x-app-layout>

    <h1>Editar un nuevo post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">

    @csrf
    @method('PUT')
        <label for="">
            Titulo:
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <br>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category" value="{{ $post->category }}">
        </label>
        <br>
        <br>
        <label for="">
            Contenido:
            <textarea name="content" id="">{{ $post->content }}</textarea>
        </label>
        <br>
        <br>
        <button type="submit">ACTUALIZAR POST</button>
        <a href="{{ route('posts.index') }}">CANCELAR</a>
    </form>
</x-app-layout>
