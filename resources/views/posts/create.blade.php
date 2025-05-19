<x-app-layout>

    <h1>Formulario para crear un nuevo post</h1>

    <!-- // Presentea una lista de errores de validacion.away
     @if ($errors->any())
    <div>
        <h2>Errores:</h2>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif -->

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf
        <label for="">
            Titulo:
            <input type="text" name="title" value="{{ old('title') }}">
            <!-- <div id="idTitle" class="form-text">Codigo de Comuna.</div> -->
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
            <input type="text" name="slug" value="{{ old('slug') }}">
            <!-- <div id="idSlug" class="form-text">Codigo de Comuna.</div> -->
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
            <input type="text" name="category" value="{{ old('category') }}">
            <!-- <div id="idCategory" class="form-text">Codigo de Comuna.</div> -->
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
            <textarea name="content" id="">{{ old('content') }}</textarea>
            <!-- <div id="idContent" class="form-text">Codigo de Comuna.</div> -->
            <div id="idContent" class="form-text" style="color: red;">
                @error('content')
                    {{ $message }}
                @enderror
            </div>
        </label>
        <br>
        <br>
        <button type="submit">CREAR POST</button>
        <a href="{{ route('posts.index') }}">CANCELAR</a>
    </form>
</x-app-layout>
