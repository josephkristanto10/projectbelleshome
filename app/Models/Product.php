<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $img
 * @property string $price
 * @property string $description
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';

	protected $casts = [
		'category_id' => 'int'
	];

	protected $fillable = [
		'category_id',
		'name',
		'img',
		'price',
		'description',
		'status'
	];
}
