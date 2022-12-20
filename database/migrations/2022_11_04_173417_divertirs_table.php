<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DivertirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divertirs', function (Blueprint $table) {
            $table->id();
            $table->string("image_distraction");
            $table->string("titre_distraction");
            $table->longText("description_distraction");
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
        Schema::dropIfExists('divertirs');
    }
}
