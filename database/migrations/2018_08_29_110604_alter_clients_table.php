<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function($table) {
            $table->string('position')->nullable()->default(null)->after('name');
            $table->string('website')->nullable()->default(null)->after('company_name');
            $table->string('office_number')->nullable()->default(null)->after('company_name');
            $table->integer('total_staffs')->nullable()->default(null)->after('website');
            $table->string('latitude')->nullable()->default(null)->after('total_staffs');
            $table->string('longitude')->nullable()->default(null)->after('latitude');
            $table->string('additional_number')->nullable()->default(null)->after('secondary_number');
            $table->text('remark')->nullable()->default(null)->after('industry_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function($table) {
            $table->dropColumn('position');
            $table->dropColumn('website');
            $table->dropColumn('total_staffs');
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
            $table->dropColumn('remark');
        });
    }
}
