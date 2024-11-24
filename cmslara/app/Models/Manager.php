<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Manager
 * 
 * @property int $task_id
 * @property int $problem_id
 * @property string $worker_id
 * @property string $priority
 * @property string $comment_query
 * @property string $comment_reply
 * @property Carbon|null $query_date
 * @property Carbon|null $reply_date
 *
 * @package App\Models
 */
class Manager extends Model
{
	protected $table = 'manager';
	protected $primaryKey = 'task_id';
	public $timestamps = false;

	protected $casts = [
		'problem_id' => 'int',
		'query_date' => 'datetime',
		'reply_date' => 'datetime'
	];

	protected $fillable = [
		'problem_id',
		'worker_id',
		'priority',
		'comment_query',
		'comment_reply',
		'query_date',
		'reply_date'
	];
}
