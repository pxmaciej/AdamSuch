<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('Imie');
            $table->string('Nazwisko');
            $table->string('Nazwa_Firmy');
            $table->string('Email');
            $table->string('Telefon');
            $table->string('Adres');
            $table->string('Miasto');
            $table->string('Kod_Pocztowy');
            $table->string('Kategoria');
            $table->string('Notatki');
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
        Schema::dropIfExists('checkouts');
    }
}
