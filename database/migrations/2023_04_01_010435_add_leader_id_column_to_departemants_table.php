<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departemants', function (Blueprint $table) {
            $table->unsignedBigInteger('leader_id')->after('name');
 
            $table->foreign('leader_id')->references('id')->on('leaders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departemants', function (Blueprint $table) {
            $table->dropForeign(['leader_id']);
            $table->dropColumn('leaders');
        });
    }
};
