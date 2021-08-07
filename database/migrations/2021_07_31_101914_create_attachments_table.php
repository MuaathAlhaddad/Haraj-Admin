<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->integer('attachable_id');
            $table->integer('attachable_type');
            $table->enum('type', ["photo, document, audio, video, others"]);
            $table->string('path');
            $table->string('disk_name')->nullable();
            $table->string('file_name');
            $table->softDeletes();
            $table->boolean('thumbnail')->nullable();
            $table->index(['attachable_id', 'attachable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}
