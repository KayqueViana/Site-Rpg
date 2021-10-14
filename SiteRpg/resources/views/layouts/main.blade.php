<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!--CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonte Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonte do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akronim&family=Italianno&display=swap" rel="stylesheet">
    <!--Javascript da aplicação-->
  
    <script type="text/javascript" src="/js/consulta_end.js"></script>
    <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type='text/javascript' src="/js/jquery.mask.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body background="/img/background_fill.jpg">

    <!-- Navbar do site abaixo-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                 <img src="/img/Sword-bg.png" alt="Mascote">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link"><ion-icon name="log-in"></ion-icon>Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link"><ion-icon name="person-add"></ion-icon>Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link"><ion-icon name="book"></ion-icon>Instruções</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link"><ion-icon name="finger-print"></ion-icon>Minha Ficha</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')


        <footer>
        <p>A Ordem das Cinzas &copy; {{ date("Y") }} - Kayque Viana</p>
        </footer>
  

</body>
</html>