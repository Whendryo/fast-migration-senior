<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SeniorPolymorphic extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [];
    protected $primaryKey = null;

    public static function connectDatabase(string $table, string $primaryKey = null): SeniorPolymorphic
    {
        $instance = (new static);
        $instance->setConnection("senior");
        $instance->setTable(Str::upper($table));
        $instance->setKeyName($primaryKey);

        return $instance;
    }
}
