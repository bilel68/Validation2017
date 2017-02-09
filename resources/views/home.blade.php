@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Bienvenue dans la Boutique de jouets</div>

                <div class="panel-body">
                {{-- Affiche un Message de connection avec le nom de l'utilisateur --}}
                  @if(Auth::check())
                    Hello : {{ Auth::user()->name }}
                  @endif
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
