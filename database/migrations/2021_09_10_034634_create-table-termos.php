<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTermos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocolohigienizacao', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_consultor');
            $table->boolean('aceitou');
            $table->timestamps();
        });

        Schema::table('protocolohigienizacao', function (Blueprint $table) {
            $table->foreign('id_consultor')->references('id')->on('consultores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
