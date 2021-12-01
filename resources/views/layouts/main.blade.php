<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--css boosstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      
        <!-- css da aplicaçao -->
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

 
   <title>@yield('titulo')</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>sistema de vendas</h1>
        </div>
        <div id="nav">
            <ul>
                @auth
                <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                <li><a href="{{ route('cliente.index') }}">Fornecedores</a></li>
                <li><a href="#">Entrada</a></li>
                <li><a href="#">Vendas</a></li>
                <li>
                   <form action="{{ route('logout') }}" method="POST">
                       @csrf
                        <a href="logout"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            Sair</a>
                    </form>
                </li>
                @endauth
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">register</a></li>
                @endguest
            </ul>
        </div>
        <div id="conteudo">
            @yield('conteudo')
        </div>
        
        <div id="footer">
            copyright @ WEBI
        </div>
    </div>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>