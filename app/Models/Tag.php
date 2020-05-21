<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $name
 *
 * @package App\Models
 */
class Tag extends Model
{
	protected $table = 'tags';

	protected $fillable = [
		'name'
	];
}
