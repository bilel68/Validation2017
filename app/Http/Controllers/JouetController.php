<?php
 	namespace App\Http\Controllers;
 	use Illuminate\Http\Request;
  use App\Jouet;
  use App\Genre;
 			class JouetController extends Controller
 		 	{
 			 public function __construct()
    		{
       			 $this->middleware('auth');
  			}
    			public function index()
   			{
          $jouets = Jouet::all();
     			return view('jouet', ['jouets' => $jouets]);
    		}
        public function getOne($id)
        {
          $jouet = Jouet::find($id);
          return view('jouet', ['jouet' => $jouet]);
        }

 			}
