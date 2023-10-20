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
        Schema::create('projet_sponsor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projet_id');
            $table->unsignedBigInteger('sponsore_id');
            $table->timestamps();
            $table->foreign('sponsore_id')->references('id')->on('sponsors')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('projet_id')->references('id')->on('projet__environnementals')
            ->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projet_sponsor');
    }
};
