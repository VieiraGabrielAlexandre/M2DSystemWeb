<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planos')->insert([
            [
                'nome' => '10 Megas (UTP)',
                'valor' => '59,99', 
                'status' => 1,
                'alterado_por' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at'=> Carbon::now()->format('Y-m-d')
            ],
            [
                'nome' => '10 Megas (UTP)',
                'valor' => '69,99', 
                'status' => 1,
                'alterado_por' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at'=> Carbon::now()->format('Y-m-d')
            ],
            [
                'nome' => '30 Megas (UTP)',
                'valor' => '79,99', 
                'status' => 1,
                'alterado_por' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at'=> Carbon::now()->format('Y-m-d')
            ],
            [
                'nome' => '40 Megas (UTP)',
                'valor' => '89,99', 
                'status' => 1,
                'alterado_por' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at'=> Carbon::now()->format('Y-m-d')
            ],
            [
                'nome' => '40 Megas (Fibra)',
                'valor' => '69,99', 
                'status' => 1,
                'alterado_por' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at'=> Carbon::now()->format('Y-m-d')
            ],
            [
                'nome' => '90 Megas (Fibra)',
                'valor' => '89,99', 
                'status' => 1,
                'alterado_por' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at'=> Carbon::now()->format('Y-m-d')
            ],
            [
                'nome' => '120 Megas (Fibra)',
                'valor' => '119,99', 
                'status' => 1,
                'alterado_por' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at'=> Carbon::now()->format('Y-m-d')
            ],
            [
                'nome' => '180 Megas (Fibra)',
                'valor' => '159,99', 
                'status' => 1,
                'alterado_por' => 'Admin',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at'=> Carbon::now()->format('Y-m-d')
            ]

        ]);    
    }
}
