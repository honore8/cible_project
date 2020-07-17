<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Mail\ContactM;
use Mail;
use App\Repositories\ContactRepositoryInterface;
class ContactController extends Controller
{
    protected $contact;
    public function _construt(ContactRepositoryInterface $contact)
    {
        $this->$contact=$contact;

    }
    public function create()
{
    return view('layout');
}

   public function send(Request $request,ContactRepositoryInterface $contact )
{

   // $contact->store($request->all());
    
    $infos= [];
  
    if($request['sujet']=="autre")
    {
    $request['sujet']=$request['autre'];
    }
     \Mail::send('Account.email',
             array(
                 'sujet'=>$request->get('sujet'),
                 'nom'=>$request->get('nom'),
                 'prenom'=>$request->get('prenom'),
                 'email'=> $request->get('email'),
                 'message'=>$request->get('message')
             ), function($message) use($request)
             {
                 $message->from('fake@gmail.com');
                 $message->to('fakemail@mail.com', 'Admin')->subject($request->get('sujet'));
             });
          


    
        return redirect()->back()->with('success', 'Merci de votre message, nous vous reviendrons bien vite');
   
   }
}
