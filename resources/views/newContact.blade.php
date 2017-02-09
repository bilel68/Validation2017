@extends('layouts.app')
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
