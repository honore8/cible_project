<?php 
namespace App\Repositories;

interface AnnonceRepositoryInterface{

    public function store(array $inputs);
    public function all($id);
    public function update($inputs,$id);
    public function delete($id);
  


}