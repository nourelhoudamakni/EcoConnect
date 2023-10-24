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
        Schema::create('feed_backs', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('note');
            $table->foreignIdFor(\App\Models\Education::class)->nullable()->constrainted()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrainted()->cascadeOnDelete();
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
        Schema::dropIfExists('feed_backs');
        Schema::table('education',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\Education::class);
        });
        Schema::table('users',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\User::class);
        });
    }
};
