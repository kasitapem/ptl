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
        Schema::create('rumpunilmus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kdrumpun');
            $table->string('nmrumpun');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rumpunilmus');
    }
};
