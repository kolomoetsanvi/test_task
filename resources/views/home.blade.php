<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!--<link href={{ asset("assets/site/Bootstrap/styles/bootstrap.min.css") }} rel="stylesheet" />-->
    <script src={{ asset("assets/site/Bootstrap/js/jquery-1.11.1.min.js") }}></script>
    <script src={{ asset("assets/site/Bootstrap/js/bootstrap.min.js") }}></script>
    <link href={{ asset("assets/site/css/adminStyleSheet.css") }} rel="stylesheet" />
    <link href={{ asset("assets/site/css/adminColorStyle.css") }} rel="stylesheet" />

    <script src="{{ asset("assets/site/js/ckeditor5/ckeditor.js") }}"></script>
    <script src="{{ asset("assets/site/js/bootstrap-filestyle.min.js") }} "></script>

    <title>Главная</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Косметолог in your city
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    @if(!Gate::denies('ADD_COSMETOLOGIES'))
                        <li class="nav-item" style="margin-left: 40px">
                            <a class="nav-link" href="{{route('admin.personnel.index')}}">Персонал</a>
                        </li>
                    @endif
                    @if(!Gate::denies('ADD_COSMETOLOGIES'))
                        <li class="nav-item" >
                            <a class="nav-link" href="{{route('admin.services.index')}}">Услуги</a>
                        </li>
                    @endif
                    @if(!Gate::denies('ADD_COSMETOLOGIES'))
                        <li class="nav-item" >
                            <a class="nav-link" href="{{route('admin.cosmetologies.index')}}">Косметологии</a>
                        </li>
                    @endif
                    @if(!Gate::denies('ADD_COSMETOLOGIES'))
                        <li class="nav-item" >
                            <a class="nav-link" href="{{route('admin.promotions.index')}}">Акции</a>
                        </li>
                    @endif
                    @if(!Gate::denies('ADD_ARTICLES'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.articles.index')}}">Статьи</a>
                        </li>
                    @endif
                    @if(!Gate::denies('VIEW_REPORT'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.reports.index')}}">Отчеты</a>
                        </li>
                    @endif
                    @if(!Gate::denies('EDIT_USERS'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.users.index')}}">Пользователи</a>
                        </li>
                    @endif
                    @if(!Gate::denies('EDIT_USERS'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.permissions.index')}}">Разрешения</a>
                        </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->role }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                                Выход
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>


                    {{--        <li class="nav-item">--}}
                    {{--            <a class="nav-link" href="{{ url('/logout') }}">Выход</a>--}}
                    {{--        </li>--}}
                </ul>
            </div>


        </div>
    </nav>




    <main class="py-4">
        @yield('content')
    </main>



</div>
</body>
</html>









