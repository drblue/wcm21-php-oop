<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

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
	protected $fillable = ['name', 'email'];

	/**
	 * Get all courses for this student.
	 */
	public function courses() {
		return $this->belongsToMany(Course::class);
	}
}
