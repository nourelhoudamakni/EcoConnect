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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Posts::class)->nullable()->constrainted()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrainted()->cascadeOnDelete();

            $table->text('content');
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
        Schema::dropIfExists('comments');
        Schema::table('posts',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\Posts::class);
        });
        Schema::table('users',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\User::class);
        });
    }
};
