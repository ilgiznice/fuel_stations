<!DOCTYPE html>
<html>
    <head>
        <title>Авторизиция</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                {!! Form::open(['url' => '/auth/login/']) !!}

                {!! Form::label('inn', 'Введите ИНН') !!}
                {!! Form::text('inn') !!}

                {!! Form::label('password', 'Введите пароль') !!}
                {!! Form::password('password') !!}

                {!! Form::submit('Войти') !!}

                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
