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
    Schema::create('acte_volontaire_user', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');
    $table->unsignedBigInteger('acte_volontaire_id');
    $table->timestamps();
    $table->foreign('user_id')->references('id')->on('users')
    ->onDelete('cascade')->onUpdate('cascade');
    $table->foreign('acte_volontaire_id')->references('id')->on('acte_volontaires')
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
