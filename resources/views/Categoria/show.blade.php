<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        Categorias<br>
        <b>Nome:</b> {{ $categoria->nome }}<br>
    </body>
</html>
