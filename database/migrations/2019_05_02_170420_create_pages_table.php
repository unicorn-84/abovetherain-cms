<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('fon')->nullable();
            $table->string('mobile_fon')->nullable();
            $table->boolean('is_header')->default(true);
            $table->boolean('is_page-title')->default(true);
            $table->boolean('is_footer')->default(true);
            $table->text('head_code')->nullable();
            $table->text('content_code')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
