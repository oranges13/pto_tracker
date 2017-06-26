<?php

namespace App\Console\Commands;

use App\Employee;
use Illuminate\Console\Command;

class DisplayOnCall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oncall:display';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show Current On Call Table';

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
        $headers = ['Name','OnCall'];
        $data = Employee::all(['name','is_on_call'])->toArray();
        $this->table($headers, $data);
    }
}
