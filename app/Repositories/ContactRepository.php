<?php

namespace App\Repositories;
use App\Repositories\BaseRepository;

use App\Models\Contact;
class ContactRepository implements ContactRepositoryInterface{

/**
 * Store a contact.
 *
 * @param  array $inputs
 * @return void
 */
public function store($inputs)
{
    $contact = new $this->model;
 
    $contact->nom = $inputs['nom'];
    $contact->prenom = $inputs['prenom'];
    $contact->sujet= $inputs['objet'];
    $contact->email = $inputs['email'];
    $contact->contenu = $inputs['contenu'];
 
    $contact->save();
}
}
