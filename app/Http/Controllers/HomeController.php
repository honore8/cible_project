<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
class HomeController extends Controller
{
    use hasRole;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
        
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ( auth()->user()->hasRole('organisateur'))
        return redirect('organisateur');
    }
}
