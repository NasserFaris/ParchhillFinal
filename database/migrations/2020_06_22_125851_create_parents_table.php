<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('parent_name');            
            $table->string('email')->unique();            
            $table->string('school_year_id');
            $table->string('firest_name')->nullable();
            $table->string('last_name')->nullable();            
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('town_city')->nullable();
            $table->string('county')->nullable();
            $table->string('post_code')->nullable();
            $table->string('telephone')->nullable();
            $table->string('phone_number');
            $table->string('child_name');            
            $table->string('child_f_name')->nullable();
            $table->string('child_l_name')->nullable();            
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
        Schema::dropIfExists('parents');
    }
}
