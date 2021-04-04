<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToParetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parents', function (Blueprint $table) {
            $table->string('firest_name')->after('parent_name');
            $table->string('last_name')->after('firest_name');            
            $table->string('password')->after('last_name');
            $table->string('address')->after('password');
            $table->string('town_city')->after('address');
            $table->string('county')->after('town_city');
            $table->string('post_code')->after('county');
            $table->string('telephone')->after('post_code');
            
            $table->string('child_f_name')->after('child_name');
            $table->string('child_l_name')->after('child_f_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parents', function (Blueprint $table) {
            //
        });
    }
}
