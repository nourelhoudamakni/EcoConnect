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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->decimal('prix');
            $table->integer('likes')->default(0);
            $table->string('image');
            $table->boolean('validated')->default(false);
            $table->timestamps();
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrainted()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Collaborateur::class)->nullable()->constrainted()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::table('users',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\User::class);
        });
        Schema::table('collaborateur',function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\Collaborateur::class);
        });
    }

};
