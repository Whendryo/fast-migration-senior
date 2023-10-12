<?php

namespace App\Services\Senior;

use App\Models\SeniorPolymorphic;

class R074PAI
{
    public function __construct()
    {
        $this->table = join('', array_slice(explode('\\', __CLASS__), -1));
    }

    public static function ruleCodigo105Brasil(mixed $attr = null): void
    {
        $table = SeniorPolymorphic::connectDatabase((new static)->table)->where(['codpai' => 1])->first();
        $table->paidir = 105;
        $table->save();
    }

    public static function ruleCarregaPaises(mixed $attr = null): void
    {
        if (SeniorPolymorphic::connectDatabase((new static)->table)->count() <= 1) {
            foreach (getDataSeniorCsvAssets('R074PAI_country.csv') as $index => $country) {
                SeniorPolymorphic::connectDatabase((new static)->table)->insert([
                    'codpai' => ($index + 2),
                    'nompai' => $country->Country,
                    'codmoe' => '',
                    'codint' => null,
                    'paidir' => $country->Code,
                    'sigpai' => null,
                ]);
            }
        }
    }

}
