<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkerTaskdet
 * 
 * @property int $id
 * @property int $task_id
 * @property string $after_photo
 * @property string $task_completion
 * @property Carbon $work_completion_date
 *
 * @package App\Models
 */
class WorkerTaskdet extends Model
{
	protected $table = 'worker_taskdet';
	public $timestamps = false;

	protected $casts = [
		'task_id' => 'int',
		'work_completion_date' => 'datetime'
	];

	protected $fillable = [
		'task_id',
		'after_photo',
		'task_completion',
		'work_completion_date'
	];
}
