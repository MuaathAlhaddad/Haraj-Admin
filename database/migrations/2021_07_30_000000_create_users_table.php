<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('phone_no')->unique();
            $table->enum('gender', ['f', 'm'])->nullable();
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('state_id')->nullable()->constrained('states');
            $table->rememberToken();
            $table->dateTime('phone_verified_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->index(['email', 'phone_no']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
