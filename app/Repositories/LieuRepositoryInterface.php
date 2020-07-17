<?php 
namespace App\Repositories;

interface LieuRepositoryInterface{

    public function store(array $inputs);
    public function all();


}