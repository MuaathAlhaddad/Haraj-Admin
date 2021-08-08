<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdTaxonomyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_taxonomy', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ad_id')->constrained('ads');
            $table->foreignId('taxonomy_id')->constrained('taxonomies');
            $table->timestamps();
            $table->index(['ad_id', 'taxonomy_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_taxonomy');
    }
}
