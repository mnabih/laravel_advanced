<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class rename extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'table:rename  {from : table old name} {to : table new name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rename database table';

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
        $old = $this->argument('from');
        $new = $this->argument('to');
        Schema::rename($old, $new);
         //DB::statement("ALTER TABLE $old RENAME TO $new");
        $this->info("$old table changed to $new");
        //$this->info($old .' '.$new);
    }
}
