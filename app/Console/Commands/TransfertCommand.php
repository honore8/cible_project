<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TransfertCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notifier:transfert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notifie l\'equipe des transfert a effectuer';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Mail::send('',
             array(
           
             ), function($message) use($request)
             {
                 $message->from('fake@gmail.com');
                 $message->to('fakemail@mail.com', 'Admin')->subject($request->get('Liste des transfert a effectuer'));
             });
        return 0;
    }
}
