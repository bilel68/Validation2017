<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ReceptionController extends Controller
{
  public function __construct()
    			{
       			 $this->middleware('auth');
  			}
    public function index()
  {
    $contacts = Contact::all();
    return view('reception', ['contacts' => $contacts]);
  }
  
}
