<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planos extends Model
{
    use HasFactory;

    protected $table = 'planos';

    protected $fillable = [
        'nome', 'status', 'alterado_por'
    ];

    public static function obterTodos(){
        return self::all();
    }

    public static function obterPorId(int $id){
        return self::where('id', $id)->first();
    }
}
