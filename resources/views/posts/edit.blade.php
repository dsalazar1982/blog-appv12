<x-app-layout>

    <h1>Editar un nuevo post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">

    @csrf
    @method('PUT')
        <label for="">
            Titulo:
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
            <div id="idTitle" class="form-text" style="color: red;">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
        </label>
        <br>
        <br>
        <label for="">
            Slug:
            <input type="text" name="slug" value="{{ old('slug', $post->slug) }}">
            <div id="idSlug" class="form-text" style="color: red;">
                @error('slug')
                    {{ $message }}
                @enderror
            </div>
        </label>
        <br>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category" value="{{ old('category', $post->category) }}">
            <div id="idCategory" class="form-text" style="color: red;">
                @error('category')
                    {{ $message }}
                @enderror
            </div>
        </label>
        <br>
        <br>
        <label for="">
            Contenido:
            <textarea name="content" id="">{{ old('content', $post->content) }}</textarea>
            <div id="idContent" class="form-text" style="color: red;">
                @error('content')
                    {{ $message }}
                @enderror
            </div>
        </label>
        <br>
        <br>
        <button type="submit">ACTUALIZAR POST</button>
        <a href="{{ route('posts.index') }}">CANCELAR</a>
    </form>
</x-app-layout>
