<?php 
namespace App\Repositories;

interface EvenementRepositoryInterface{

    public function store(array $inputs, $date_deb, $date_fin, $id, $social, $pro);
  


}