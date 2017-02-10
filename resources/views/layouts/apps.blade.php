<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Byl'O'Rus</title>
    <link rel="stylesheet" text="text/css" href="vendor/bt4/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" text="text/css" href="vendor/bt4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/master.css">

  </head>
  <body>
    <header class="d-flex justify-content-around align-items-center">
      <a href="/" class="btn btn-default btn-lg ">Accueil</a>
      <a href="{{ url('/Jouets') }}">Jouets</a>
      <a href="{{ url('/contact/new') }}">Contact</a>
      <a href="{{url('/java')}}">J.S</a>
      @if (Auth::guest())
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('register') }}">Register</a>

      @else
      <a>
      {{ Auth::user()->name }} <span class="caret"></span>
      </a>
      <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
      Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
      </form>



      @endif
    </header>



<footer>
<p>Copyright : ItAkademy 2017</p>
</footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script type="text/javascript" src="vendor/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="vendor/bt4/js/bootstrap.min.js"></script></script>
    <script src="/js/app.js"></script>
  </body>
</html>
