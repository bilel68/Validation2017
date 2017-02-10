<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/master.css">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Byl'O'Rus</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <div id='title'></div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<div class="intro-header">
    <div class="bg-overlay">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                      <h1>Bienvenue dans la Boutique de jouets Bil'O'Rus </h1>
                        <hr class="intro-divider">

                        <ul class="list-inline intro-social-buttons">
                          {{-- Affiche un Message de connection avec le nom de l'utilisateur --}}
                            @if(Auth::check())
                              Hello : {{ Auth::user()->name }}
                            @endif
                            <li>
                                <a href="{{'/'}}" class="btn btn-default btn-lg ">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ url('/Jouets') }}"class="btn btn-default btn-lg ">Jouets</a>
                            </li>
                            <li>
                                <a href="{{ url('/contact/new') }}"class="btn btn-default btn-lg ">Contact </a>
                            </li>

                            <li>
                                <a href="{{ url('/java') }}"class="btn btn-default btn-lg ">JS </a>
                            </li>
                            <li>
                                <a href="{{ url('/page404') }}"> </a>
                            </li>

                            @if (Auth::guest())
                              <li><a href="{{ route('login')}}" class="btn btn-default btn-lg ">Login</a></li>
                              <li><a href="{{ route('register') }}"class="btn btn-default btn-lg ">Register</a></li>

                            @else
                          <li><a>
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a></li>
                          <li> <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            Logout
                            </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>



                            @endif
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<p>Numéro 1 des magasins de jouets pour enfants, Bil'o'Rus propose un grand nombre de jeux, figurines et appareils multimédia pour les enfants de tous les âges.
   Les grands comme les petits pourront retrouver les indémodables poupées Barbie ou jeux de construction LEGO ainsi que tous leurs héros préférés pour préparer la liste de Noël idéale.
   Toujours au top de l'actualité, vous trouverez très facilement le cadeau de Noël ou d'anniversaire idéal pour un enfant parmi notre sélection de jeux.
    N'oubliez pas que Bil'O'Rus c'est aussi de nombreux articles de puériculture et jouets pour bébé via son site Byl'Babies'R'Us</p>

  <img src="/img/accueil.jpg">

</body>

<footer style="text-align:center;">
  <p>Copyright : ITAkademy 2017</p>
  <a href="contact">Nous contacter</a>
</footer>
</html>
