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
            $table->string('nom_contrat');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->timestamps();
            // cle etrangere 
            $table->foreignId('contrat_id')->constrained();

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
