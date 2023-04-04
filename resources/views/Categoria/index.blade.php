<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        categorias<br>
        <a href="{{url('categoria/create')}}">Adicionar</a>

        <table>
            <tr>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
        

            @foreach ($categorias as $value)
                <tr>
                        <td>{{ $value->nome}}</td>
                        <td>
                            <a href="{{ url('categoria/' . $value->id)}}"->Visualizar</a>
                            <a href="{{ url('categoria/' . $value->id. '/edit')}}"->Editar</a>
                            {!! Form::open(['url' => 'categoria/' . $value->id, 'method' => 'delete']) !!}
                            {{ Form::submit('X') }}
                            {!! Form::close() !!}
                        </td>
                </tr>
            @endforeach
       </table>
    </body>
</html>
