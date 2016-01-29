<?php

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
		    $table->increments('id');
		    $table->integer('parent_id')->default(0);
		    $table->string('alias', 200)->unique();
		    $table->boolean('is_published')->default(1);
		    $table->boolean('show_in_menu')->default(1);
		    $table->string('menu_title', 100);
		    $table->tinyInteger('position');
		    $table->string('title', 500)->nullable();
		    $table->text('content')->nullable();
		    $table->string('meta_title', 600)->nullable();
		    $table->string('meta_desc', 1500)->nullable();
		    $table->string('meta_key', 1500)->nullable();
		    $table->timestamps();
		    $table->timestamp('published_at')->nullable();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::drop('pages');
    }
}
