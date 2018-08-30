<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leads', function($table) {
            $table->integer('type_id')->unsigned()->nullable()->default(null)->after('id');
            $table->foreign('type_id')->references('id')->on('lead_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads', function($table) {
            $table->dropColumn('type_id');
        });
    }
}
