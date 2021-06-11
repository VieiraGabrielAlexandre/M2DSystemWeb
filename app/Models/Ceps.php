<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Ceps extends Model
{
    protected $table = 'table_ceps';

    protected $fillable = [
        'cep',
        'rua',
        'numero_complemento',
        'bairro',
        'cidade',
        'uf',
        'status',
        'alterado_por'
    ];

    public static function todosCeps()
    {
        return self::all();
    }
}
