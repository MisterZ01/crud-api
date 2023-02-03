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
        Schema::create('panneaus', function (Blueprint $table) {
            $table->id();
            $table->string('nom_panneau')->nullable();
            $table->string('longitude');
            $table->string('latidude');
            
            $table->timestamps();
            // cle etrangere 
            $table->foreignId('contrat_id')->constrained()->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panneaus');
    }
};
