<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use mt4\client\MT4Client;

class MT4ClientTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mt-server:mt4-test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MT4 Server test';

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
     * @return mixed
     */
    public function handle()
    {
        $client = new MT4Client();
        $client->open();

        echo $client->Version();
        echo $client->Connect('demohk01.acyfx.com:443');
        echo $client->Login(97, 'bVdw59&@Mn');
        echo $client->Ping();
        echo $client->Disconnect();

        $client->close();
    }
}
