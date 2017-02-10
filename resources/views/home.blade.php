@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div >

                <div class="panel-heading"><h1>Bienvenue dans la Boutique de jouets Bil'o'Rus</h1></div>

                <div>
                {{-- Affiche un Message de connection avec le nom de l'utilisateur --}}
                  @if(Auth::check())
                    Hello : {{ Auth::user()->name }}
                  @endif

<p>Numéro 1 des magasins de jouets pour enfants, Bil'o'Rus propose un grand nombre de jeux, figurines et appareils multimédia pour les enfants de tous les âges.
   Les grands comme les petits pourront retrouver les indémodables poupées Barbie ou jeux de construction LEGO ainsi que tous leurs héros préférés pour préparer la liste de Noël idéale.
   Toujours au top de l'actualité, vous trouverez très facilement le cadeau de Noël ou d'anniversaire idéal pour un enfant parmi notre sélection de jeux.
    N'oubliez pas que Bil'O'Rus c'est aussi de nombreux articles de puériculture et jouets pour bébé via son site Byl'Babies'R'Us</p>

  <img src="/img/accueil.jpg">


                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
