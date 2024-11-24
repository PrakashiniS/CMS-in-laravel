<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Worker
 * 
 * @property int $id
 * @property string $name
 * @property string $dept
 * @property string $phone
 *
 * @package App\Models
 */
class Worker extends Model
{
	protected $table = 'workers';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'dept',
		'phone'
	];
}
