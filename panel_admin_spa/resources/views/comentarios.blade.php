
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Comentarios</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Usando TailwindCSS para estilos -->
</head>
<body class="bg-gray-100 p-6">
    
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Comentarios</h1>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-2 px-4 border-b">Mensaje</th>
                    <th class="py-2 px-4 border-b">Fecha de Creación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comentarios as $comentario)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $comentario->mensaje }}</td>
                        <td class="py-2 px-4 border-b">{{ $comentario->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop