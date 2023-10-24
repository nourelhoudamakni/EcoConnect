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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrainted()->cascadeOnDelete();
            $table->string('titre');
            $table->longtext('description');
            $table->string('image');
            $table->unsignedBigInteger("likes")->default(0);
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
        Schema::dropIfExists('posts');
        Schema::table('users',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\User::class);
        });
    }

  


};
