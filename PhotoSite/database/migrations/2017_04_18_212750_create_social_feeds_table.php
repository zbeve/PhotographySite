<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialFeedsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('social_feeds', function (Blueprint $table) {
      $table->increments('id');
      $table->string('type', 50);
      $table->integer('pubdate');
      $table->string('user');
      $table->text('user_avatar_url');
      $table->text('feed_link');
      $table->text('feed_body');
      $table->text('feed_image');
      $table->integer('count')->default(0);
      $table->integer('count_fav')->default(0);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('social_feeds');
  }
}
