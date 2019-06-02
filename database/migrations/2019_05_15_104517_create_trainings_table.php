<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('trainings', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('day');
      $table->string('start_time');
      $table->string('end_time');
      $table->unsignedBigInteger('service_id');
      $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
      $table->unsignedBigInteger('coach_id');
      $table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade');
      $table->string('badge_color')->nullable();
      $table->string('badge_text')->nullable();
      $table->string('text_color')->nullable();
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
    Schema::dropIfExists('trainings');
  }
}
