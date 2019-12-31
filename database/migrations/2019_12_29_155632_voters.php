<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Voters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { if (!Schema::hasTable('voter'))
      Schema::create('voter', function (Blueprint $table) {
          $table->increments('id');
          $table->string('user_id')->nullable();
          $table->string('status')->nullable();
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
  Schema::dropIfExists('voter');
}

}
