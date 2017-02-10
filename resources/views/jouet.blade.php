@extends('layouts.apps')
 	@section('content')
 			<div class="container">
 			   <div class="row">
 			       <div class="col-md-8 col-md-offset-2">
 			           <div class="panel panel-default">
             		   <div class="panel-heading"></div>
               		  <div class="panel-body">

                      @if(! empty($jouets))

                                        @foreach ($jouets as $jouet)
                                          <h1>Article :{{ $jouet->name }}</h1>
                                          <img style="width: 400px;" src="/img/{{$jouet->img}}" >
                                          <p>Nombre de piece : {{ $jouet->nbpiece}}</p>
                                          <br>
                                        <p>Prix de l'article: {{ $jouet->prix}}€</p>
                                          @foreach ($jouet->genres as $genre)
                                          <p>Catégorie : {{ $genre->name}}</p>
                                          <p>Description : {{ $genre->description}}</p>
                                          @endforeach
                                          <br>
                                        @endforeach
                                      @elseif(! empty($jouet))
                                        {{ $jouet->name }}
                                        {{ $jouet->nbpiece}}
                                        {{ $jouet->prix}}
                                        @foreach ($jouet->genres as $genre)
                                         {{ $genre->name}}
                                          {{ $genre->description}}
                                        @endforeach
                                      @else
                                        Aucun Jouet a affiché
                                      @endif

                		</div>
                    </div>
       			 </div>
    			</div>
    	 </div>
 	@endsection
