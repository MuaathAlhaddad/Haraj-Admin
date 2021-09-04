<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxonomyContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxonomy_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->foreignId('taxonomy_id')->constrained('taxonomies');
            $table->integer('parent_id')->nullable();
            $table->string('lang')->nullable();
            $table->json('icon');
            $table->dateTime('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->index(['taxonomy_id', 'title', 'parent_id', 'lang']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxonomy_contents');
    }
}
