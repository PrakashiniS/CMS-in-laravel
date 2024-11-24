<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faculty
 * 
 * @property int $id
 * @property string $faculty_id
 * @property string $password
 * @property string $faculty_name
 * @property string $department
 * @property string $faculty_contact
 * @property string $faculty_mail
 *
 * @package App\Models
 */
class Faculty extends Model
{
	protected $table = 'faculty';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'faculty_id',
		'password',
		'faculty_name',
		'department',
		'faculty_contact',
		'faculty_mail'
	];
}
