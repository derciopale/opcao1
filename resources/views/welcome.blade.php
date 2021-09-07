<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>XavaMusica- Principal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
            </head>
    <body>

        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))

                <div class="top-right links">
                    
                    @auth

                        <a href="{{ url('/home') }}">Home</a>

                    @else

                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Cadastro</a>
                        @endif

                    @endauth

                </div> <!-- top-right links -->

            @endif


        </div> <!-- flex-center position-ref full-height -->

    </body>
</html>
