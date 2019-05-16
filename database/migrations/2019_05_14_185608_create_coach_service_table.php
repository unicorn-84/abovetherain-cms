<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachServiceTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('coach_service', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('coach_id')->nullable()->default(null);
      $table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade');
      $table->unsignedBigInteger('service_id')->nullable()->default(null);
      $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
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
    Schema::dropIfExists('coach_service');
  }
}
