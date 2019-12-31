<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Candidate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('candidate'))
        Schema::create('candidate', function (Blueprint $table) {
            $table->increments('cand_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('username')->nullable();
            $table->string('post')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('candidate');
      }
  
  }
  
