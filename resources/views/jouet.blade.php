@extends('layouts.app')
 	@section('content')
 			<div class="container">
 			   <div class="row">
 			       <div class="col-md-8 col-md-offset-2">
 			           <div class="panel panel-default">
             		   <div class="panel-heading">Jouets</div>
               		  <div class="panel-body">
                      @if(! empty($jouets))

                                        @foreach ($jouets as $jouet)

                                          {{ $jouet->name }}
                                          {{ $jouet->nbpiece}}
                                          {{ $jouet->prix}}

                                          @foreach ($jouet->genres as $genre)
                                            {{ $genre->name}}
                                            {{ $genre->description}}
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
                                        Aucun hero affiché
                                      @endif
                                      
                		</div>
                     </div>
       			 </div>
    			</div>
    	 </div>
 	@endsection
