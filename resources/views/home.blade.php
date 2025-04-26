<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="max-w-4xl mx-auto px-4">
        <!-- <h1>Bienvenido a la pagina principal</h1> -->
         <x-alert2 type='info'>
            <x-slot name='title'>
                TITULO:
            </x-slot>
            Contenido de la alerta.
         </x-alert2>

         <p>HOLA MUNDO!</p>
    </div>
</body>

</html>
