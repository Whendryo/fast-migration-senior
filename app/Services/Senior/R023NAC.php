<?php

namespace App\Services\Senior;

use App\Models\SeniorPolymorphic;

class R023NAC
{
    public function __construct()
    {
        $this->table = join('', array_slice(explode('\\', __CLASS__), -1));
    }

    public static function ruleCodigo105Brasil(mixed $attr = null): void
    {
        SeniorPolymorphic::connectDatabase((new static)->table, 'codnac')
            ->where(['codnac' => 10])
            ->update(['pairfb' => 105]);
    }

}
