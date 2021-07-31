<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('body')->nullable();
            $table->integer('reviewable_id');
            $table->foreignId('user_id')->constrained('users');
            $table->integer('reviewable_type');
            $table->enum('star', [1, 2, 3, 4, 5])->nullable();
            $table->index(['reviewable_id', 'reviewable_type']);
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
        Schema::dropIfExists('reviews');
    }
}
