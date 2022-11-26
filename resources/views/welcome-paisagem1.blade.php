<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Certificados</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css" rel="stylesheet" />
        <style>
            @font-face {
                font-family: yanone;
                src: url('fonts/YanoneKaffeesatz-Regular.ttf');
            }

            @page {
                size: A4,
                orientation: landscape
            }

            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                margin: 1px;
            }

            #certificado {
                margin: 0.95cm 0;
                width: 996px;
                height: 18.65cm;
                /* height: 704.01125px; */
                border: 2px #696969 solid;
                border-radius: 1em;
                padding: 2px 0;
            }

            h1#nome-aluno {
                position: absolute;
                width: 1200px;
                font-size: 3.5em;
                text-align: center;
                font-family: yanone, sans-serif;
                font-weight: 100;
                letter-spacing: 1.4pt;
                color: #03989E;
            }
        </style>
    </head>
    <body class="A4">
        @foreach($dados as $key => $dado)
            <div id="main">
                <h1 style="transform: translate(75px, 252px)" id="nome-aluno">{{ $dado->nome }}</h1>
                <img width="980" id="certificado" src="{{ asset('images/certificado-informatica.png') }}" alt="">
            </div>
        @endforeach
    </body>
</html>
