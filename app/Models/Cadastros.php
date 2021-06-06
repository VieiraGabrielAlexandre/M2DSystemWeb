<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Cadastros extends Model
{
    protected $table = 'table_cadastros';

    public static function todosCadastros()
    {
        return self::all();
    }

    public static function cadastrosNegados()
    {
        return self::where('status', 0)->get();
    }

    public static function cadastrosEmAnalise()
    {
        return self::where('status', 2)->get();
    }

    public static function cadastrosFinalizados()
    {
        return self::where('status', 1)->get();
    }
}
