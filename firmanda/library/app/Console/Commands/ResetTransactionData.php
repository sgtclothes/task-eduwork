<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class ResetTransactionData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:transaction-data';
    


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset all data in transactions and transaction_details tables';

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
        // Nonaktifkan foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tabel transactions dan transaction_details
        DB::table('transactions')->truncate();
        DB::table('transaction_details')->truncate();

        // Aktifkan kembali foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->info('Transaction and Transaction Details tables have been reset.');
    }
}
