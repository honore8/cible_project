<?php

namespace App\Repositories;
use App\Models\Lieu;
use Illuminate\Support\Facades\DB;


class LieuRepository implements LieuRepositoryInterface{
public function store(Array $inputs)
{
    $lieu->pays=inputs['pays'];
    $lieu->code=inputs['code'];

    $lieu->save();
}
public function all()
{
    $users = DB::table('countrys')
            ->join('pays', 'countrys.countrycode', '=', 'pays.countrycode');
}

}