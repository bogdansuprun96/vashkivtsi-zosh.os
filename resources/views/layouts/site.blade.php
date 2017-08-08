@section('header')
        <!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <head>
        <link rel="shortcut icon" href="img/logo.png" type="image/png">
    </head>
    <title>{{ $header[3]->content }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    $(function() {
        // путь текущей страницы
        var pathPage = location.pathname.slice(1);
        var parentUl = $('.navbar-nav a[href*='+pathPage']').closest('li').addClass('active').parent('ul');
        if (parent.closest('.navbar-nav li').length) {
            parentUl.closest('li').addClass('active');
        }
    });
</script>
<div class="container-fluid">
    <div class="hidden-xs row black">
        <div class="col-sm-4 col-md-4 col-lg-4"><span id="phone">{{ $header[0]->content }}</span></div>
        <div class="col-sm-4 col-md-4 col-lg-4"><span id="email">{{ $header[1]->content }}</span></div>
        <div class="col-sm-4 col-md-4 col-lg-4"><span id="address">{{ $header[2]->content }}</span></div>
    </div>
    <div class="row header">
        <div class="col-sm-12 col-md-12 header-col">
            <div class="col-sm-4 col-md-4">
                <a href="{{ route('index') }}"><img id="logo" src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>
            <div class="hidden-xs col-sm-8 col-md-8">
                <h1 id="header-h1">{{ $header[3]->content }}</h1>
                <div class="slider-quote">
                    <span id="header-quote">Здається - кращого немає нічого в Бога, як Дніпро та наша славная країна… (Т. Г. Шевченко)</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 menu hidden-xs">
            <nav class="navbar navbar-default menu-navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <ul class="nav navbar-nav">
                            <li class="active active-custom"><a href="{{ route('index') }}">Головна <span class="sr-only">(current)</span></a></li>
                            <li><a href="{{ route('news') }}">Новини</a></li>
                            <li><a href="library.php">Бібліотека</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Тести <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">ДПА</a></li>
                                    <li><a href="#">ЗНО</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Інформація про ЗНО</a></li>
                                    <li><a href="#">Інформація про ДПА</a></li>
                                </ul>
                            </li>
                            @foreach($urls as $url)
                                <li><a href="{{ $url->href }}">{{ $url->title }}</a></li>
                            @endforeach

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Увійти</a></li>
                            <li><a href="{{ url('/register') }}">Реєстрація</a></li>
                            @else
                                <li><a href="{{ url('/home') }}">Панель керування</a></li>
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Інше <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Розробник</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Классы navbar и navbar-default (базовые классы меню) -->
        <nav class="navbar navbar-default visible-xs">
            <!-- Контейнер (определяет ширину Navbar) -->
            <div class="container-fluid">
                <!-- Заголовок -->
                <div class="navbar-header">
                    <!-- Кнопка «Гамбургер» отображается только в мобильном виде (предназначена для открытия основного содержимого Navbar) -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Бренд или название сайта (отображается в левой части меню) -->
                    <a class="navbar-brand" href="#">Меню</a>
                </div>
                <!-- Основная часть меню (может содержать ссылки, формы и другие элементы) -->
                <div class="collapse navbar-collapse" id="navbar-main">
                    <ul class="nav navbar-nav">
                        <li class="active active-custom"><a href={{ route('index') }}">Головна <span class="sr-only">(current)</span></a></li>
                        <li><a href="{{ route('news') }}">Новини</a></li>
                        @foreach($urls as $url)
                            <li><a href="{{ $url->href }}">{{ $url->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @show
@yield('content')

@section('footer')
        <div class="row visible-xs">
            <div class="row black container-fluid">
                <br>
                <span>{{ $header[0]->content }}</span><br>
                <span>{{ $header[1]->content }}</span><br>
                <span>{{ $header[2]->content }}</span>



            </div>
        </div>
        <div class="row modal-footer hidden-xs">
            <div class="col-sm-3 col-md-3 col-lg-3 footer-col">
                <!-- BLOCK 1-->
                {!! $footer['block1']->tinytext !!}
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 footer-col">
                <!-- BLOCK 2-->
                {!! $footer['block2']->tinytext !!}
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 footer-col">
                <!-- BLOCK 3-->
                {!! $footer['block3']->tinytext !!}
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 footer-col">
                <!-- BLOCK 3-->
                {!! $footer['block4']->tinytext !!}
            </div>
        </div>
</div>
<script src="{{ asset('js/jquery.montage.js') }}"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
    @show