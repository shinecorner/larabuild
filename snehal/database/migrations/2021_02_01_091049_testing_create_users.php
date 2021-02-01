<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestingCreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('testing')->create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('lats_name');
            $table->string('name');
            $table->string('title');
            $table->integer('votes');
            $table->integer('age');
            $table->boolean('status');
            $table->boolean('subscribed');
            $table->string('email')->unique();
            $table->boolean('active');
            $table->integer('account_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        //
    }
}
