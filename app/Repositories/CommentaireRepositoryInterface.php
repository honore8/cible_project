<?php 
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

interface CommentaireRepositoryInterface{

    public function all() ;
   // public function get($id);
    public function store( $id, $inputs);
   // public function update($id, array $inputs);


}