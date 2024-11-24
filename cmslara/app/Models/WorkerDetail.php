<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkerDetail
 * 
 * @property int $id
 * @property string $worker_id
 * @property string $password
 * @property string $worker_first_name
 * @property string $worker_last_name
 * @property string $worker_gender
 * @property string $worker_dept
 * @property string $worker_mobile
 * @property string $worker_mail
 * @property string $worker_emp_type
 * @property string $worker_photo
 * @property string $usertype
 *
 * @package App\Models
 */
class WorkerDetail extends Model
{
	protected $table = 'worker_details';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'worker_id',
		'password',
		'worker_first_name',
		'worker_last_name',
		'worker_gender',
		'worker_dept',
		'worker_mobile',
		'worker_mail',
		'worker_emp_type',
		'worker_photo',
		'usertype'
	];
}
