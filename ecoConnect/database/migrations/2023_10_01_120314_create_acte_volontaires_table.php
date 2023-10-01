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
        Schema::create('acte_volontaires', function (Blueprint $table) {
            $table->id();
            $table->string('categorie');
            $table->string('titre');
            $table->longtext('description');
            $table->json('images');
            $table->string('lieu');

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
        Schema::dropIfExists('acte_volontaires');
    }
};
