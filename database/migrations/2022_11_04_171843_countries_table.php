<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string("images");
            $table->string("titre_pays");
            $table->longText("description_pays");
            $table->string("capital");
            $table->string("langue_officielle");
            $table->string("population");
            $table->string("hymne_national");
            $table->string("monnaie");
            $table->string("fete_national");
            $table->string("pays_frontalier");
            $table->string("image_capital");
            $table->string("titre_capital");
            $table->longText("description_capital");
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
        Schema::dropIfExists('countries');
    }
}
