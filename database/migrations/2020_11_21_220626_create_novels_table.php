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
              $table->char('serie', 150);
              $table->bigInteger('isbn');
              $table->char('genre',100);
              $table->bigInteger('page_count');
              $table->bigInteger('volume_number');
              $table->bigInteger('finish')->default(0);
              $table->string('comment');
              $table->bigInteger('rate');
              $table->char('cover', 250);
              $table->Date('creation_date');
              $table->Date('begin_date');
              $table->Date('end_date');
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
