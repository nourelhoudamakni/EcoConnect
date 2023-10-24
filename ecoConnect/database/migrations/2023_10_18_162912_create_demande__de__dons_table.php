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
        Schema::create('demande__de__dons', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('typeDon')->nullable();
            $table->longtext('description');
            $table->datetime('dateCreation');
            $table->datetime('dateFin');
            $table->string('status');

            $table->foreignIdFor(\App\Models\ActeVolontaire::class)->nullable()->constrainted()->cascadeOnDelete();
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
        Schema::dropIfExists('demande__de__dons');
        Schema::table('acte_volontaires',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\ActeVolontaire::class);
        });
    }
};
