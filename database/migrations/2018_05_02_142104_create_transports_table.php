<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uvoz_izvoz');
            $table->string('tip_prevoza');
            $table->string('posiljatelj_primatelj');
            $table->string('status');
            $table->string('ime_partnera');
            $table->string('firma');
            $table->string('postanski_broj');
            $table->string('mesto');
            $table->string('drzava');
            $table->string('telefon');
            $table->string('email');

            $table->string('ime_partnera_2');
            $table->string('firma2');
            $table->string('postanski_broj2');
            $table->string('mesto2');
            $table->string('drzava2');
            $table->string('telefon2');
            $table->string('email2');

            $table->string('broj');
            $table->string('vrsta_kolija');
            $table->string('tezina_kg');

            $table->string('kolicina');
            $table->string('dimenzije');

            $table->string('incoterm');
  
            $table->string('mesto3');

            $table->string('opasan_teret');
            $table->string('napomena');


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
        Schema::dropIfExists('transports');
    }
}
