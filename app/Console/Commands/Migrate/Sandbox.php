<?php

namespace App\Console\Commands\Migrate;

use App\Services\Senior\R004HOR;
use App\Services\Senior\R006ESC;
use Illuminate\Console\Command;

class Sandbox extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:sandbox';

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
        /*
        R000ASS::ruleHorasCentesimais();
        R000ASS::ruleEstouroProprietaria();
        R000ASS::rulePermitirMesmoHistoricoEscala();

        R074PAI::ruleCodigo105Brasil();
        R074PAI::ruleCarregaPaises();

        R023NAC::ruleCodigo105Brasil();
        */

        R004HOR::ruleInsereHorarioImportacao();
        R006ESC::ruleInsereEscalaImportacao();
    }
}
