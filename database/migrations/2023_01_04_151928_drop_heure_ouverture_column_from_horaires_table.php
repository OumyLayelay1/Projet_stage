<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropHeureOuvertureColumnFromHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('horaires', function (Blueprint $table) {
            if (Schema::hasColumn('horaires', 'heure_ouverture')){
  
                Schema::table('horaires', function (Blueprint $table) {
                    $table->dropColumn('heure_ouverture');
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
