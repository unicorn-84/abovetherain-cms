<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumVideoTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('album_video', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('album_id')->nullable()->default(null);
      $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
      $table->unsignedBigInteger('video_id')->nullable()->default(null);
      $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
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
    Schema::dropIfExists('album_video');
  }
}
