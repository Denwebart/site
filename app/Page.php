<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Page
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $alias
 * @property boolean $is_published
 * @property boolean $show_in_menu
 * @property string $menu_title
 * @property boolean $position
 * @property string $title
 * @property string $content
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $published_at
 */

class Page extends Model
{
	/**
	 * Имя таблицы
	 *
	 * @var string
	 */
	protected $table = 'pages';

	/**
	 * Поля, доступные для массового заполнения
	 *
	 * @var array
	 */
	protected $fillable = [
		'parent_id',
		'alias',
		'is_published',
		'show_in_menu',
		'menu_title',
		'position',
		'title',
		'meta_title',
		'meta_desc',
		'meta_key',
		'published_at',
	];

	/**
	 * Правила валидации
	 *
	 * @var array
	 */
	public static $rules = [
		'show_in_menu' => 'boolean',
		'is_published' => 'boolean',
		'parent_id' => 'integer',
		'alias' => 'required|unique:pages|max:200',
		'menu_title' => 'required_without_all:title|max:100',
		'title' => 'required_without_all:menu_title|max:500',
		'meta_title' => 'max:600',
		'meta_desc' => 'max:1500',
		'meta_key' => 'max:1500',
	];

	/**
	 * Выбор подпунктов
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function children()
	{
		return $this->hasMany('App\Page', 'parent_id');
	}

	/**
	 * Выбор родительской страницы
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function parent()
	{
		return $this->belongsTo('App\Page', 'parent_id');
	}
}
