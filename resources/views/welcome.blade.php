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
                margin: 1px;
            }

            #certificado {
                border: 2px #696969 solid;
                border-radius: 1em;
                padding: 2px 0;
            }

            h1#nome-aluno {
                position: absolute;
                width: 985px;
                font-size: 3.5em;
                text-align: center;
                font-family: yanone, sans-serif;
                font-weight: 100;
                letter-spacing: 1.4pt;
                color: #03989E;
            }
        </style>
    </head>
    <body>
        @php
            $x = 0;
        @endphp
        @foreach($dados as $dado)
            @php
                $top = ($x*718.08)+210;
                $margin = ($x % 2 == 1) ? 6 : 1;

                if ($x % 2 == 1)
                    $top -= 8;
            @endphp

            <h1 style="{{ "top:". $top ."px; margin-bottom: ". $margin ."mm;" }}" id="nome-aluno">{{ $dado->nome }}</h1>
            <div id="main">
                <img style="{{ "margin-bottom: ". $margin ."mm;" }}" width="980" id="certificado" src="{{ asset('images/certificado-informatica.png') }}" alt="">
            </div>

            @php $x++; @endphp
        @endforeach
    </body>
</html>
