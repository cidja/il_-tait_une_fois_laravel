<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
              $table->id();
              $table->char('title', 200);
              $table->char('author', 150);
              $table->bigInteger('isbn');
              $table->char('genre',100);
              $table->bigInteger('page_count');
              $table->bigInteger('volume_number')->default(0);
              $table->bigInteger('finish')->default(0);
              $table->longText('comment');
              $table->bigInteger('rate');
              $table->char('cover', 250);
              $table->datetime('creation_date', 0);//->default('2020-11-22 10:00:00')
              $table->datetime('begin_date', 0);//->default('2020-11-22 10:00:00');
              $table->datetime('end_date', 0);//->default('2020-11-22 10:00:00');
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
        Schema::dropIfExists('novels');
    }
}
