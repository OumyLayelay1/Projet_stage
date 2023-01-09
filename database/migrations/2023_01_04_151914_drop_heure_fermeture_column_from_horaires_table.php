<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropHeureFermetureColumnFromHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('horaires', function (Blueprint $table) {
            if (Schema::hasColumn('horaires', 'heure_fermeture')){
  
                Schema::table('horaires', function (Blueprint $table) {
                    $table->dropColumn('heure_fermeture');
                });
            }
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
