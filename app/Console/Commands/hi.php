<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class hi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hi {name=m} {--L|lastname=metwally}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description from commands';

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
        //$this->info($this->argument('name')); // get main argument -- must be enter
        //$this->info($this->option('lastname')); // get option argument 

        // $name = $this->argument('name');
        // $lastname = $this->option('lastname');
        // $this->info($name . ' ' . $lastname);

        $name = $this->ask('whats is your name');
        $this->info($name);
    }
}
