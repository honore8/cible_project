<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransfertController extends Controller
{
    public function alltransferts($id){
        
        $id= auth()->user()->id;
        return $this->transfert->all($id);
    }

}
