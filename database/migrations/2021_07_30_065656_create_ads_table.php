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
            $table->string('sku')->unique();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->double('price', 20, 2);
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('negotiable')->nullable();
            $table->enum('status', ['draft', 'pending', 'unpublished', 'published', 'sold']);
            $table->softDeletes();
            $table->timestamps();
            $table->index(['user_id', 'status', 'sku']);
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
