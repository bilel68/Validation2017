@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Voici les message recu des visiteur :</div>

                @foreach ($contacts as $contact)
                {{ $contact->name }}
                {{ $contact->message}}
                <br>
                @endforeach
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
