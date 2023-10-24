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
            $table->dateTime('date')->nullable();
            $table->time('heure');
            $table->string('image');
            $table->string('lieu');
            $table->boolean('validated')->default(false);
            $table->foreignIdFor(\App\Models\User::class ,'organizer_id')->nullable()->constrainted()->cascadeOnDelete();


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
        Schema::table('users',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\User::class);
        });

    }
};
