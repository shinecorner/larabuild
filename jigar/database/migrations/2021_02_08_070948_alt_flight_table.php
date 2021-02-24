<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AltFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::connection('testing')->table('flights', function (Blueprint $table) {
            $table->unsignedBigInteger('destination_id');
            $table->foreign('destination_id')->references('id')->on('destinations')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->datetime('arrived_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('testing')->table('flights', function (Blueprint $table) {            
            $table->dropForeign(['destination_id']);
            $table->dropColumn('destination_id');
        });
    }
}
