<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MainWebsite
 * 
 * @property int $id
 * @property string $title_section_1
 * @property string $img_section_1
 * @property string $img_section_2
 * @property string $title_section_2
 * @property string $title_section_3
 * @property string $img_section_3
 *
 * @package App\Models
 */
class MainWebsite extends Model
{
	protected $table = 'main_website';
	public $timestamps = false;

	protected $fillable = [
		'title_section_1',
		'img_section_1',
		'img_section_2',
		'title_section_2',
		'title_section_3',
		'img_section_3'
	];
}
