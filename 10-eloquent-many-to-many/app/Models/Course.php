<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];

	/**
	 * Get all students for this course.
	 */
	public function students() {
		return $this->belongsToMany(Student::class);
	}
}
