<?php
namespace App\Repositories;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;


class LieuRepository implements TicketRepositoryInterface{

public function find_event($id)
{
    return Ticket::where('evenement_id','=', $id)
    ->groupby('type');
}

}