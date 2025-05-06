<x-app-layout>

    <a href="{{ route('posts.index') }}">REGRESAR A LISTA DE POST</a>

    <h1>Titulo: {{ $post->title }}</h1>
    <p>
        <b>Categoria:</b>{{ $post->category }}
    </p>
    <p>
        {{ $post->content }}
    </p>

    <a href="{{ route('posts.edit', $post) }}">EDITAR POST</a>

    <form action="{{ route('posts.destroy', $post) }}" method="POST">

        @csrf
        @method('delete')
        <button type="submit">ELMINAR POST</button>

    </form>

</x-app-layout>
