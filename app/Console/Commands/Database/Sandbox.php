<?php

namespace App\Console\Commands\Database;

use App\Models\SeniorPolymorphic;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Sandbox extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:sandbox';

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
        //dd(DB::connection('sqlsrv')->select('select * from r030emp'));

        /*
        SeniorPolymorphic::connectDatabase('R000ASS')->update(['horcen' => 'S']);

        dump(SeniorPolymorphic::connectDatabase('R000ASS')->select('horcen')->get()->toArray());

        $table = SeniorPolymorphic::connectDatabase('R000ASS')->first();
        $table->horcen = 'S';
        $table->save();

        dump(SeniorPolymorphic::connectDatabase('R000ASS')->select('horcen')->get()->toArray());
        */

    }
}
