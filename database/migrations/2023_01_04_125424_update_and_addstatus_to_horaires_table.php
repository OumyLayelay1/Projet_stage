<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAndAddstatusToHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('horaires', function (Blueprint $table) {
            
            $table->time('heure_ouvertur',$precision = 0);
            $table->time('heure_fermetur',$precision = 0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horaires', function (Blueprint $table) {
            //
        });
    }
}
