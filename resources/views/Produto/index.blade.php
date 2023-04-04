<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        Produtos<br>
        <a href="{{url('produto/create')}}">Adicionar</a>

        <table>
            <tr>
                <th>Categoria</th>    
                <th>Nome</th>
                <th>Ação</th>
            </tr>
        

            @foreach ($produtos as $value)
                <tr>
                    <td>{{ $value->categoria->nome }}</td>    
                    <td>{{ $value->nome}}</td>
                        <td>
                            <a href="{{ url('produto/' . $value->id)}}"->Visualizar</a>
                            <a href="{{ url('produto/' . $value->id. '/edit')}}"->Editar</a>
                            {!! Form::open(['url' => 'produto/' . $value->id, 'method' => 'delete']) !!}
                            {{ Form::submit('X') }}
                            {!! Form::close() !!}
                        </td>
                </tr>
            @endforeach
       </table>
    </body>
</html>
