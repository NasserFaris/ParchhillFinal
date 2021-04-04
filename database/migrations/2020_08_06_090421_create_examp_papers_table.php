<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExampPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examp_papers', function (Blueprint $table) {
            $table->id();
            $table->integer('agePeriod_id');
            $table->integer('subject_id');
            $table->string('download')->nullable();
            $table->string('ocr')->nullable();
            $table->string('aqa')->nullable();
            $table->string('edexcel')->nullable();
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
        Schema::dropIfExists('examp_papers');
    }
}
