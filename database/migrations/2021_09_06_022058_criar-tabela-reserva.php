<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaReserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table){
            $table->increments('id')->unsigned();
            $table->unsignedBigInteger('id_consultor');
            $table->unsignedBigInteger('id_cadeira');
            $table->string('local');
            $table->date('dia');
            $table->integer('status');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('reservas', function (Blueprint $table){
            $table->foreign('id_consultor')->references('id')->on('consultores');
            $table->foreign('id_cadeira')->references('id')->on('cadeiras');
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
