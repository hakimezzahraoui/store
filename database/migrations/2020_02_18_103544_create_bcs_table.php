<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcsTable extends Migration
{
    public function up()
    {
        Schema::create('bcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nbr');
            $table->unsignedBigInteger('trade_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bcs');
    }
}
