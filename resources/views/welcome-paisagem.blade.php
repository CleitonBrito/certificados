<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Certificados</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            @font-face {
                font-family: yanone;
                src: url('fonts/YanoneKaffeesatz-Regular.ttf');
            }

            body {
                text-align: center;
                margin: 1px;
            }

            #certificado {
                text-align: center;
                width: 1250px;
                min-height: 100vh;
                margin: 1em 0;
                border: 2px #696969 solid;
                border-radius: 1em;
                padding: 2px 0;
            }

            h1#nome-aluno {
                position: absolute;
                width: 1355px;
                font-size: 3.5em;
                text-align: center;
                font-family: yanone, sans-serif;
                font-weight: 100;
                letter-spacing: 1.4pt;
                color: #03989E;
            }

            .break {
               page-break-after: none; 
            }
           
        </style>
    </head>
    <body>
        @foreach($dados as $dado)
            <div id="main" class="break">
                <h1 style="transform: translateY(300px)" id="nome-aluno">{{ $dado->nome }}</h1>
                <img width="980" id="certificado" src="{{ asset('images/certificado-informatica.png') }}" alt="">
            </div>
        @endforeach
    </body>
</html>
