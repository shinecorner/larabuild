<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('testing')->create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name',15);
            $table->unsignedInteger('number');
            $table->string('departure',50);
            $table->string('destination',50);
            $table->unsignedInteger('price');
            $table->boolean('active');
            $table->boolean('departed');
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
        Schema::connection('testing')->dropIfExists('flights');
    }
}
