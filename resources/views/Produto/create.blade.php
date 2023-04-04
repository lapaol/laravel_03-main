<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Laravel</title>

        
    </head>
    <body>

            <h1>Adicionar Produto</h1>
            
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            {!! Form::open(['url' => 'produto/create']) !!}

                {{ Form::label('categoria', 'Categoria:') }}<br>
                {{Form::select('categoria_id', [$categorias]) }}<br>
            
                {{ Form::label('nome', 'Nome:') }}<br>
                {{ Form::text('nome') }}<br>

                {{ Form::label('quantidade', 'Quantidade:') }}<br>
                {{ Form::text('quantidade') }}<br>

                {{ Form::label('valor', 'Valor:') }}<br>
                {{ Form::text('valor') }}<br>
            
                {{ Form::submit('Enviar') }}

            {!! Form::close() !!}
    </body>
</html>