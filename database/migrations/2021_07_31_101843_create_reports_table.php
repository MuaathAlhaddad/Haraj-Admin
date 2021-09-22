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
            $table->string('body')->nullable(); // for others choice
            $table->integer('reportable_id');
            $table->string('reportable_type');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('report_content_id')->nullable()->constrained('report_contents');
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
