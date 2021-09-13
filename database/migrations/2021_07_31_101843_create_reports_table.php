<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('reportable_id');
            $table->string('reportable_type');
            $table->dateTime('seen_at')->nullable();
            $table->enum('type', ["comment, ad, user, review"]);
            $table->softDeletes();
            $table->timestamps();
            $table->index(['reportable_id', 'reportable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
