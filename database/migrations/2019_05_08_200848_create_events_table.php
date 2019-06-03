<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('events', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->string('date')->nullable();
      $table->string('slug')->unique();
      $table->text('seo_title')->nullable();
      $table->text('description')->nullable();
      $table->text('seo_description')->nullable();
      $table->string('poster')->nullable();
      $table->text('content')->nullable();
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
    Schema::dropIfExists('events');
  }
}
