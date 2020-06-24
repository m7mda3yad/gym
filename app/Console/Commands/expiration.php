<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App ;

class expiration extends Command
{
    protected $signature = 'member_expir';

    protected $description = 'member_expir';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $m        = new App\Http\Controllers\Offers\OfferController();
        $m->update();        
    }
}