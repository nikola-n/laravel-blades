<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>
        header {
            background: linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
            ),
            url({{ asset($backgroundPhoto) }});
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    @if (Request::is('sample'))
        <header class="widen">
    @else
        <header>
    @endif
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="{{ route('index') }}">Blog</a>
                <ul class="navbar-nav ml-auto">
                    @if (Request::is('/'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Home
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Home
                            </a>
                        </li>
                    @endif

                    @if (Request::is('aboutme'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('aboutme') }}">About</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutme') }}">About</a>
                        </li>
                    @endif

                    @if (Request::is('sample'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('sample') }}">Sample post</a>
                        </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sample') }}">Sample post</a>
                    </li>
                    @endif
                    
                    @if (Request::is('contact'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    @else 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>

        <div class="container moveup">
            <div class="row h-100">
                <div class="col-6 mx-auto text-center text-white d-flex align-items-center flex-column justify-content-center">
                    @if (Request::is('sample'))
                        <h1 class="text-left h1 font-weight-bold"> {{ $title }} </h1>
                        <h4 class="subtitle text-left"> {{ $subtitle }} 
                        </h4>
                        <h4 class="text-left w-100"> {{ $small }}</h4>
                    @else
                        <h1> {{ $title }} </h1>
                        <h4> {{ $small }} </h4>
                    @endif
                </div>
            </div>
        </div>
    </header>