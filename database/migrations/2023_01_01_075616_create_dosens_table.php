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
        Schema::create('dosens', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('nidn')->unique();
            // $table->string('nmdosen');
            // $table->string('templhr');
            // $table->string('tgllhr');
            // $table->string('tempat_lahir');
            // $table->string('jk');
            // $table->string('alamat');
            // $table->string('email');
            // $table->string('nohp');
            // $table->string('foto');
            // // $table->unsignedBigInteger('id_status');
            // // // $table->integer('id_status')->unsigned();
            // // $table->unsignedBigInteger('id_jjgpendik');
            // // $table->unsignedBigInteger('id_rumpun');
            //  #-- cara di atas masih erorr.
            // $table->foreignId('id_status')->constrained();
            // $table->foreignId('id_jjgpendik')->constrained();
            // $table->foreignId('id_rumpun')->constrained();
            $table->timestamps();
            // $table->foreign('id_status')->references('id')->on('statusperkawinans')->onDelete('cascade');
            // // $table->foreignId('id_status')->constrained('statusperkawinans')->onDelete('set null');
            // $table->foreign('id_jjgpendik')->references('id')->on('jenjangpendidkans')->onDelete('cascade');
            // // $table->foreignId('id_jjgpendik')->constrained('jenjangpendidkans')->onDelete('set null');
            // $table->foreign('id_rumpun')->references('id')->on('rumpunilmus')->onDelete('cascade');
            // $table->foreignId('id_rumpun')->constrained('rumpunilmus')->onDelete('set null');
           
            #-- solusinya 
            
            // $table->foreign('id_status')->references('id')->on('statusperkawinans')->onDelete('cascade');
            // $table->foreign('id_jjgpendik')->references('id')->on('jenjangpendidkans')->onDelete('cascade');
            // $table->foreign('id_rumpun')->references('id')->on('rumpunilmus')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
};

