<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restos', function (Blueprint $table) {
            $table->id();
            $table->string("image_restaurant");
            $table->string("titre_restaurant");
            $table->string("button_link");
            $table->string("address");
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
        Schema::dropIfExists('restos');
    }
}
