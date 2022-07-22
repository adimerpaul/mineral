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
        Schema::create('quincenas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cotAg', 5, 2)->nullable()->default(1.1);
            $table->decimal('cotPb', 5, 2)->nullable()->default(1.1);
            $table->decimal('cotZn', 5, 2)->nullable()->default(1.1);
            $table->decimal('cotSn', 5, 2)->nullable()->default(1.1);
            $table->decimal('alicAg', 5, 3)->nullable()->default(3.600);
            $table->decimal('alicPb', 5, 3)->nullable()->default(3.000);
            $table->decimal('alicZn', 5, 3)->nullable()->default(3.000);
            $table->decimal('alicSn', 5, 3)->nullable()->default(3.000);
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
        Schema::dropIfExists('quincenas');
    }
};
