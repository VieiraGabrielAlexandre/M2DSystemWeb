<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Ceps extends Model
{
    protected $table = 'table_ceps';

    public static function todosCeps()
    {
        return self::all();
    }
}
