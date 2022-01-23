<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventuploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventuploads', function (Blueprint $table) {
            $table->id();
            $table->string('img_name');
            $table->string('title');
            $table->string('content');
            $table->text('body');
            $table->string('start_date');
            $table->string('time_event');
            $table->string('location_event');
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
        Schema::dropIfExists('eventuploads');
    }
}
