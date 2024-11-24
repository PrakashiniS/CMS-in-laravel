<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ComplaintsDetail
 * 
 * @property int $id
 * @property int $faculty_id
 * @property string $faculty_name
 * @property string $department
 * @property string $faculty_contact
 * @property string $faculty_mail
 * @property string $block_venue
 * @property string $venue_name
 * @property string $type_of_problem
 * @property string $problem_description
 * @property string $images
 * @property Carbon $date_of_reg
 * @property string $days_to_complete
 * @property string $status
 * @property string $feedback
 * @property string $reason
 * @property string $task_completion
 * @property Carbon $date_of_completion
 * @property Carbon|null $reassign_date
 *
 * @package App\Models
 */
class ComplaintsDetail extends Model
{
	protected $table = 'complaints_detail';
	public $timestamps = false;

	protected $casts = [
		'faculty_id' => 'int',
		'date_of_reg' => 'datetime',
		'date_of_completion' => 'datetime',
		'reassign_date' => 'datetime'
	];

	protected $fillable = [
		'faculty_id',
		'faculty_name',
		'department',
		'faculty_contact',
		'faculty_mail',
		'block_venue',
		'venue_name',
		'type_of_problem',
		'problem_description',
		'images',
		'date_of_reg',
		'days_to_complete',
		'status',
		'feedback',
		'reason',
		'task_completion',
		'date_of_completion',
		'reassign_date'
	];
}
