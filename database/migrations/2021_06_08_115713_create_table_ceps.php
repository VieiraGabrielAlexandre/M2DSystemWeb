<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCeps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_ceps', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->integer('status');
            $table->string('alterado_por');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_ceps');
    }
}
