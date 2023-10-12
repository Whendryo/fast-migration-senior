<?php

namespace App\Services\Senior;

use App\Models\SeniorPolymorphic;

class R000ASS
{
    public function __construct()
    {
        $this->table = join('', array_slice(explode('\\', __CLASS__), -1));
    }

    public static function ruleHorasCentesimais(mixed $attr = null): void
    {
        $table = SeniorPolymorphic::connectDatabase((new static)->table)->first();
        $table->horcen = 'S';
        $table->save();
    }

    public static function rulePermitirMesmoHistoricoEscala(mixed $attr = null): void
    {
        $table = SeniorPolymorphic::connectDatabase((new static)->table)->first();
        $table->conhes = 'S';
        $table->escdup = 'A';
        $table->save();
    }

    public static function ruleEstouroProprietaria(mixed $attr = null): void
    {
        foreach (SeniorPolymorphic::connectDatabase('r000epr')->get() as $table) {
            $table->perprp = 98;
            $table->emaprp = "whendryo.nascimento@seniornortepr.com.br;" . env('PARAMS_SALES_EMAIL');
            $table->save();
        }
    }
}
