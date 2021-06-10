<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_ceps', function (Blueprint $table) {
            $table->dropColumn('numero');
            $table->string('cep')->after('id');
            $table->string('numero_complemento')->after('numero');
            $table->string('rua')->after('numero_complemento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_ceps', function (Blueprint $table) {
            //
        });
    }
}
