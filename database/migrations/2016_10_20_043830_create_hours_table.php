<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('hours', function (Blueprint $table) {
			$table->increments('id');
			$table->string('day')->unique();
			$table->string('day_abbr');
			$table->string('kitchen_open');
			$table->string('kitchen_open_suffix')->nullable();
			$table->string('kitchen_close');
			$table->string('kitchen_close_suffix')->nullable();
			$table->string('bar_open');
			$table->string('bar_open_suffix')->nullable();
			$table->string('bar_close');
			$table->string('bar_close_suffix')->nullable();
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
        Schema::dropIfExists('hours');
    }
}
