<?php
namespace App\Repositories;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;


class LieuRepository implements TransfertRepositoryInterface{

public function all($id)
{
    $users = DB::table('transfert')
            ->where('user_id','=', $id);
}

}