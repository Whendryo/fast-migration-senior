<?php

namespace App\Services\Senior;

use App\Models\SeniorPolymorphic;

class R004HOR
{

    public function __construct()
    {
        $this->table = join('', array_slice(explode('\\', __CLASS__), -1));
    }

    public static function ruleInsereHorarioImportacao(mixed $attr = null): void
    {
        if (SeniorPolymorphic::connectDatabase((new static)->table)->count() <= 4) {
            SeniorPolymorphic::connectDatabase((new static)->table)->insert([
                'codhor' => 1,
                'deshor' => 'Horário Padrão',
                'tabest' => 0,
                'turhor' => 9,
                'jorhor' => 'E',
                'sepjor' => 0,
                'fatred' => 0,
                'lieref' => 0,
                'toeens' => 0,
                'toeref' => 0,
                'tofhor' => 0,
                'tofens' => 0,
                'tofref' => 0,
                'tiphor' => 3,
                'crfmov' => 0,
                'hddprd' => 0,
                'hortrb' => null,
                'codsin' => null,
                'horext' => null,
                'hornot' => null,
                'extadi' => 'N',
                'toehor' => null,
                'calfal' => 1,
                'jorace' => 0,
                'fleeso' => 'N',
                'tipint' => 1,
                'calint' => null,
                'iniind' => null,
                'fimind' => null
            ]);
            SeniorPolymorphic::connectDatabase('R004MHR')->insert([
                [
                    'codhor' => 1,
                    'seqmar' => 1,
                    'usobat' => 1,
                    'horbat' => 480,
                    'tolant' => 0,
                    'tolapo' => 0,
                    'faimov' => 0
                ],
                [
                    'codhor' => 1,
                    'seqmar' => 2,
                    'usobat' => 4,
                    'horbat' => 720,
                    'tolant' => 0,
                    'tolapo' => 0,
                    'faimov' => 0
                ],
                [
                    'codhor' => 1,
                    'seqmar' => 3,
                    'usobat' => 4,
                    'horbat' => 792,
                    'tolant' => 0,
                    'tolapo' => 0,
                    'faimov' => 0
                ],
                [
                    'codhor' => 1,
                    'seqmar' => 4,
                    'usobat' => 1,
                    'horbat' => 1080,
                    'tolant' => 0,
                    'tolapo' => 0,
                    'faimov' => 0
                ]
            ]);
        }
    }

}
