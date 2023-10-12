<?php

namespace App\Services\Senior;

use App\Models\SeniorPolymorphic;

class R006ESC
{

    public function __construct()
    {
        $this->table = join('', array_slice(explode('\\', __CLASS__), -1));
    }

    public static function ruleInsereEscalaImportacao(mixed $attr = null): void
    {
        if (SeniorPolymorphic::connectDatabase((new static)->table)->count() === 0) {
            SeniorPolymorphic::connectDatabase((new static)->table)->insert([
                'codesc' => 1,
                'nomesc' => 'Escala Padrão',
                'tabest' => 0,
                'claesc' => 0,
                'hordsr' => 440,
                'horsem' => 2640,
                'hormes' => 13200,
                'limba1' => 0,
                'limba2' => 0,
                'tipfer' => 'F',
                'tabfer' => 0,
                'ferofi' => 0,
                'marfol' => 2,
                'sepfol' => 0,
                'prjdfo' => 1,
                'coddfa' => 0,
                'tipesc' => 'P',
                'tipbus' => 0,
                'turesc' => 9,
                'verint' => 'I',
                'codprm' => 0,
                'prmfer' => 0,
                'prmsab' => 0,
                'prmdom' => 0,
                'desrev' => '',
                'codhdi' => 0,
                'hortrb' => 0,
                'horfol' => 0,
                'hordup' => 0,
                'tratrb' => '',
                'tipjor' => 9,
                'tipjos' => 9,
                'desjor' => '',
                'pagepf' => 'N',
                'escnot' => 'N',
                'dessim' => ''
            ]);
        }

        if (SeniorPolymorphic::connectDatabase('R006HOR')->count() === 0) {
            SeniorPolymorphic::connectDatabase('R006HOR')->insert([
                [
                    'codesc' => 1,
                    'seqreg' => 1,
                    'codhor' => 1,
                    'horbu1' => 0,
                    'horbu2' => 0,
                    'horbu3' => 0,
                    'horbu4' => 0,
                    'horbu5' => 0,
                    'hordup' => null
                ],
                [
                    'codesc' => 1,
                    'seqreg' => 2,
                    'codhor' => 1,
                    'horbu1' => 0,
                    'horbu2' => 0,
                    'horbu3' => 0,
                    'horbu4' => 0,
                    'horbu5' => 0,
                    'hordup' => null
                ],
                [
                    'codesc' => 1,
                    'seqreg' => 3,
                    'codhor' => 1,
                    'horbu1' => 0,
                    'horbu2' => 0,
                    'horbu3' => 0,
                    'horbu4' => 0,
                    'horbu5' => 0,
                    'hordup' => null
                ],
                [
                    'codesc' => 1,
                    'seqreg' => 4,
                    'codhor' => 1,
                    'horbu1' => 0,
                    'horbu2' => 0,
                    'horbu3' => 0,
                    'horbu4' => 0,
                    'horbu5' => 0,
                    'hordup' => null
                ],
                [
                    'codesc' => 1,
                    'seqreg' => 5,
                    'codhor' => 1,
                    'horbu1' => 0,
                    'horbu2' => 0,
                    'horbu3' => 0,
                    'horbu4' => 0,
                    'horbu5' => 0,
                    'hordup' => null
                ],
                [
                    'codesc' => 1,
                    'seqreg' => 6,
                    'codhor' => 9998,
                    'horbu1' => 0,
                    'horbu2' => 0,
                    'horbu3' => 0,
                    'horbu4' => 0,
                    'horbu5' => 0,
                    'hordup' => null
                ],
                [
                    'codesc' => 1,
                    'seqreg' => 7,
                    'codhor' => 9999,
                    'horbu1' => 0,
                    'horbu2' => 0,
                    'horbu3' => 0,
                    'horbu4' => 0,
                    'horbu5' => 0,
                    'hordup' => null
                ]
            ]);
        }
    }

}
