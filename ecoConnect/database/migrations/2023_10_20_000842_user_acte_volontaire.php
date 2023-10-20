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
    Schema::create('user_acte_volontaire', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('participant_id');
    $table->unsignedBigInteger('acte_id');
    $table->timestamps();
    $table->foreign('participant_id')->references('id')->on('users')
    ->onDelete('cascade')->onUpdate('cascade');
    $table->foreign('acte_id')->references('id')->on('acte_volontaires')
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
        //
    }
};
