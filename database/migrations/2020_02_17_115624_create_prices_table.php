<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedDecimal('buy');
            $table->unsignedDecimal('sale');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
