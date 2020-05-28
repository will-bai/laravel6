<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use mt5\client\MT5Client;

class MT5ClientTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mt-server:mt5-test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MT5 Server test';

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
        $client = new MT5Client();
        $client->open();

        echo $client->Version();
        echo $client->Connect('acydemomt5.acy.cloud', 1004, 'MT5demo2020!@', '', -1, 30000);
        $client->Disconnect();

        $client->close();
    }
}
