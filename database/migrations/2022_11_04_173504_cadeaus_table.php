<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CadeausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadeaus', function (Blueprint $table) {
            $table->id();
            $table->string("image_marche");
            $table->string("titre_marche");
            $table->string("button_link");
            $table->string("adress");
            $table->string("coordonnee");
            $table->string("site_web");
            $table->integer("pays_id");
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
        Schema::dropIfExists('cadeaus');
    }
}
