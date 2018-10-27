<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikerReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biker_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Type');
            $table->datetime('Date');
            $table->float('Latitude');
            $table->float('Longitude');
            $table->longText('Message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biker_reports');
    }
}
