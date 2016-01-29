<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		DB::table('pages')->insert([
			[
				'id' => '1',
				'parent_id' => '0',
				'alias' => '/',
				'is_published' => '1',
				'show_in_menu' => '1',
				'menu_title' => 'Главная',
				'position' => '1',
				'title' => 'Главная',
				'content' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
				'published_at' => \Carbon\Carbon::now(),
				'created_at' => \Carbon\Carbon::now(),
				'updated_at' => '',
			],
			[
				'id' => '2',
				'parent_id' => '0',
				'alias' => 'karta-sajta',
				'is_published' => '1',
				'show_in_menu' => '1',
				'menu_title' => 'Карта сайта',
				'position' => '2',
				'title' => 'Карта сайта',
				'content' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
				'published_at' => \Carbon\Carbon::now(),
				'created_at' => \Carbon\Carbon::now(),
				'updated_at' => '',
			],
			[
				'id' => '3',
				'parent_id' => '0',
				'alias' => 'kontakty',
				'is_published' => '1',
				'show_in_menu' => '1',
				'menu_title' => 'Контакты',
				'position' => '3',
				'title' => 'Контакты',
				'content' => '',
				'meta_title' => '',
				'meta_desc' => '',
				'meta_key' => '',
				'published_at' => \Carbon\Carbon::now(),
				'created_at' => \Carbon\Carbon::now(),
				'updated_at' => '',
			],
		]);
	}
	public function down()
	{
		DB::table('pages')->whereIn('id', range(1, 3))->delete();
	}

}
