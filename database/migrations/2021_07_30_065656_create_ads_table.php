<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->integer('sku')->unique();
            $table->string('title');
            $table->string('description')->nullable();
            $table->float('price');
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('warranty')->nullable();
            $table->boolean('favorited')->nullable();
            $table->boolean('negotiable')->nullable();
            $table->enum('status', ['draft', 'pending', 'unpublished', 'published', 'sold']);
            $table->softDeletes();
            $table->timestamps();
            $table->index(['user_id', 'status', 'favorited', 'sku']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
