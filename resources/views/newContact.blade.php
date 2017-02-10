@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Besoin de parler ? Contactez nous.</div>
                {{ Form::open(['url' => 'contact/new']) }}
                  {{ Form::label('name', 'Nom') }}
                    {{ Form::text('name') }}
                    {{ Form::label('message', 'message') }}
                    {{ Form::input('text','message') }}
                    {{ Form::submit('Envoyer votre message') }}
                  {{ Form::close() }}
                <div class="panel-body">
                  <p>Veuiller vous connecter pour acceder a la boite de reception</p>
                  <div class="col-md-4 col-md-offset-2">
<a href="{{ url('reception') }}">Boite au lettre</a>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
