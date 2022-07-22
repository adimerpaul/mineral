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
        Schema::create('diarias', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cotDiaAg', 5, 2)->nullable()->default(1.1);
            $table->decimal('cotDiaPb', 5, 2)->nullable()->default(1.1);
            $table->decimal('cotDiaZn', 5, 2)->nullable()->default(1.1);
            $table->decimal('cotDiaSn', 5, 2)->nullable()->default(1.1);
            $table->date('fecha');
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
        Schema::dropIfExists('diarias');
    }
};
