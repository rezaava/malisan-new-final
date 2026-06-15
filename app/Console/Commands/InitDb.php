<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //

        $this->comment ("progress started...");
        Artisan::call("migrate");
        Artisan::call("migrate:refresh");
        Artisan::call("db:seed",['--class'=>"DatabaseSeeder",]);
        $this->comment("completed successfully!");
    }
}
