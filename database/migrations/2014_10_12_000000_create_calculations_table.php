<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculationsTable extends Migration
{
    public function up()
    {
        Schema::create('calculations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('name');
            $table->unsignedBigInteger('ristretto');
            $table->unsignedBigInteger('espresso');
            $table->unsignedBigInteger('lungo');
            $table->unsignedBigInteger('amount');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('calculations');
    }
}
