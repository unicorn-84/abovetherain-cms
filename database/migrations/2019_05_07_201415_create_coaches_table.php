<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('coaches', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->string('slug')->unique();
      $table->integer('position')->nullable();
      $table->text('seo_title')->nullable();
      $table->string('poster')->nullable();
      $table->text('seo_description')->nullable();
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
    Schema::dropIfExists('coaches');
  }
}
