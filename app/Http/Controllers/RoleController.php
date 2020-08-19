<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RoleController extends Controller
{
   public function __construct( Request $request)
   {
     
       $this->middleware('guest');
   }

 public function organisateur(Request $request)
 {
   
    $request->session()->put('profil', 'organisateur');

    
    return redirect('inscription');
 }
 public function participant(Request $request)
 {
      
    $request->session()->put('profil', 'participant');

    return redirect('inscription');
 }

 public function sponsor(Request $request)
 {
 
    $request->session()->put('profil', 'sponsor');

    return redirect('inscription');
 }

 public function extra(Request $request)
 {
      
    $request->session()->put('profil', 'extra');

    return redirect('inscription');
 }
 public function prestataire(Request $request)
 {
      
    $request->session()->put('profil', 'prestataire');

    return redirect('inscription');
 }



}
