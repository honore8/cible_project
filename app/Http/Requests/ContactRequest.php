<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends Request
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sujet' => 'required|min:10|max:150',
            'nom'    =>'required|min:3|max:50',
            'prenom'    =>'required|min:1|max:50',
            'email' => 'required|email',
            'message' => 'required|min:100|max:1000'
        ];
    
       
    }

    public function messages(){
        return [
            'min:3'=> 'Champ trop court',
        'required' => 'Vous devez remplir ce champ',
        'email' => 'Vous devez saisir une adresse mail valide'
        ];
      }
}
