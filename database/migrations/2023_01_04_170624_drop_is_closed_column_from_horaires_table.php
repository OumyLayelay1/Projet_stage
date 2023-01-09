<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropIsClosedColumnFromHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('horaires', function (Blueprint $table) {
            if (Schema::hasColumn('horaires', 'is_closed')){
  
                Schema::table('horaires', function (Blueprint $table) {
                    $table->dropColumn('is_closed');
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
