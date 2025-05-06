<x-app-layout>

<a href="{{ route('posts.index') }}">REGRESAR A LISTA DE POST</a>

    <h1>Titulo: {{ $post->title }}</h1>
<p>
    <b>Categoria:</b>{{ $post->category }}
</p>
<p>
    {{ $post->content }}
</p>

<a href="{{ route('posts.edit', $post->id) }}">EDITAR POST</a>

</x-app-layout>
