<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('services', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->string('slug')->unique();
      $table->integer('order')->default(1);
      $table->string('seo_title')->nullable();
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
    Schema::dropIfExists('services');
  }
}
