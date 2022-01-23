<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classdetails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('warsztaty_nazwa');
            $table->text('opis_warsztatow');
            $table->text('opis_krotki');
            $table->text('informacje');
            $table->string('wiek');
            $table->string('rozmiar_grup');
            $table->string('file_img');
            $table->string('cena');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classdetails');
    }
}
