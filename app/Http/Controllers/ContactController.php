<?php
 	namespace App\Http\Controllers;
 	use Illuminate\Http\Request;
  use App\Contact;


 			class ContactController extends Controller
 		 	{
 			 public function __construct()
    		{
       			 $this->middleware('auth');
  			}

        public function newContactForm()
        {
              $contacts = Contact::all();
              $contactsArray = Array();
              $contactsId = Array();

              foreach ($contacts as $contact) {
                $contactsId[] = $contact->id;
                $cotnactsArray[$contact->id]= $contact->name;
              }
        return view('newcontact', ['contacts' => $contactsArray, 'contactsId' => $contactsId]);
             }
      public function store()
       {
         flash('Votre message vient d être envoyé!' , 'success');

          return home();
        }

        public function insertOne(Request $request)
         {
           $contact = new Contact;
           $contact->name = $request->name;
           $contact->message = $request->message;
           $contact->save();

           return redirect('/contact/new');
         }


 			}
