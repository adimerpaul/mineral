<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('coop_id')->unsigned();
            $table->string('nombreClie',50);
            $table->string('paternoClie',50);
            $table->string('maternoClie',50);
            $table->string('ci');
            $table->string('telefono');
            $table->string('cel');
            $table->integer('activo');
            $table->timestamps();
            $table->foreign('coop_id')->references('id')->on('cooperatives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
