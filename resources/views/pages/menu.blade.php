<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
        @if(Auth::user()->role === 'admin')
            <li class="nav-item" style="margin-left: 40px">
{{--                <a class="nav-link" href="{{route('admin.personnel.index')}}">Персонал</a>--}}
                <a class="nav-link" href="">Добавление категорий</a>
            </li>
        @endif
            @if(Auth::user()->role === 'distributor' || Auth::user()->role === 'manager')
            <li class="nav-item" >
                <a class="nav-link" href="">Добавление товара</a>
            </li>
        @endif
            <li class="nav-item" >
                <a class="nav-link" href="">Категории</a>
            </li>
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
