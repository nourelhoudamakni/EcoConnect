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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('categorie');
            $table->string('titre');
            $table->longText('description');
            $table->string('image');
            $table->boolean('validate')->default(false);
            $table->decimal('moyenne', 5, 2)->nullable();
            $table->timestamps();
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrainted()->cascadeOnDelete();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
        Schema::table('users',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\User::class);
        });
    }



};
