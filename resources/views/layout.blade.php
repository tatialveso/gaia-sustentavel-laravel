<!DOCTYPE html>
<html lang="pt-br">

{{-- head com o css específico do layout --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        /* header */

        .top-menu {
            background-color: white;
        }

        .top-menu>ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            justify-content: flex-end;
        }

        .top-menu>ul>li>a {
            text-decoration: none;
            color: black;
            padding: 10px;
            font-size: 12px;
        }

        .navbar {
            padding: 0;
        }

        .form-control:focus {
            outline: none !important;
            box-shadow: none;
        }

        .form-control:focus {
            border: 1px solid #ced4da;
        }

        header>.navbar>form>.btn {
            border: none;
            background: white;
        }

        nav button {
            display: none;
        }

        .nav {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .btn:focus,.btn:active {
            outline: none !important;
            box-shadow: none;
        }

        .dropdown-item:active {
            background-color: transparent;
        }

        /* footer */

        footer{
            height: 250px;
            background-color: #54775e;
            color:#FFF;
            margin-top: auto;
        }

        footer>.container>div {
            display: flex;
            justify-content: space-between;
        }

        footer .bottom-menu {
            padding: 0;
            margin: 0;
            display: block;
        }

        footer .bottom-menu>li>a {
            text-decoration: none;
            color: white;
        }

        footer>img {
            width: 100px;
            display: flex;
            justify-content: flex-start;
        }

        footer ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            justify-content: flex-end;
        }

        footer>.container>div>ul>li>a {
            text-decoration: none;
            padding: 5px;
        }
    </style>
    @yield('sobre-assets')
    @yield('como-funciona-assets')
</head>

<body>
    {{-- menu de topo --}}
    <div class="container top-menu font-weight-bold mt-1">
        <ul>
            <li><a href="/favoritos"><i class="material-icons">
                        favorite
                    </i></a></li>
            <li><a href="/carrinho"><i class="material-icons">
                        shopping_basket
                    </i></a></li>
            <li><a href="login"><i class="material-icons">
                        person
                    </i></a></li>
        </ul>
    </div>

    {{-- header da página --}}
    <header>
        <nav class="container navbar navbar-light">
            <a class="navbar-brand p-0 m-0" href="/"><img src="/img/logo/gaia-branco.png"
                    alt="Logo de Gaia sustentável"></a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Digite a sua busca..."
                    aria-label="Search">
                <button class="btn p-0" type="submit">
                    <i class="material-icons align-middle">
                        search
                    </i>
                </button>
            </form>
        </nav>
    </header>

    {{-- menu de navegação --}}
    <nav class="border-top">
        <button>
            <i class="material-icons">
                menu
            </i>
        </button>
        <ul class="nav container justify-content-around">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Higiene Pessoal
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/higiene-pessoal">Todos os produtos de Higiene Pessoal</a>
                    <a class="dropdown-item" href="#">Cabelo</a>
                    <a class="dropdown-item" href="#">Rosto</a>
                    <a class="dropdown-item" href="#">Cosméticos</a>
                    <a class="dropdown-item" href="#">Corpo e Banho</a>
                    <a class="dropdown-item" href="#">Itens Pessoais</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Casa e Ambiente
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/casa-ambiente">Todos os produtos de Casa e Ambiente</a>
                    <a class="dropdown-item" href="#">Limpeza doméstica</a>
                    <a class="dropdown-item" href="#">Aromatizador</a>
                </div>
            </div>

            <button class="btn" type="button">
                Ofertas
            </button>
        </ul>
    </nav>

    {{-- chamada para páginas com conteúdo --}}
    @yield ('index')
    @yield('sobre')
    @yield('como-funciona')
    @yield('contato')
    @yield('loja')
<<<<<<< HEAD
    @yield('higiene')
    @yield('produto')
=======
    @yield('resumo')
    @yield('compras')
>>>>>>> dc0ba65b74dd97f35812a4eb350e5c7c38b119f7

    {{-- footer da página --}}
    <footer class="mt-5">
        <div class="container">
            <div>
                <img src="/img/logo/gaia-verde.png" class="rounded float-left" alt="...">
                <ul class="bottom-menu mt-4">
                    <li><strong>Gaia sustentável</strong></li>
                    <li><a href="/sobre">Quem somos</a></li>
                    <li><a href="/como-funciona">Como funciona</a></li>
                    <li><a href="/contato">Fale conosco</a></li>
                </ul>
            </div>
            <hr>
            <div>
                <p class="m-0"><i class="material-icons">copyright</i> 2020. Todos os direitos reservados.</p>
                <ul>
                    <li><a href="https://facebook.com"><img src="/img/rede-social/icon-facebook.png"></a></li>
                    <li><a href="https://instagram.com"><img src="/img/rede-social/icon-instagram.png"></a></li>
                    <li><a href="https://twitter.com"><img src="/img/rede-social/icon-twitter.png"></a></li>
                    <li><a href=""><img src="/img/rede-social/icon-rss.png"></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>