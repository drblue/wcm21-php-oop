<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	/**
	 * Get the user's associated phone
	 */
	public function phone() {
		return $this->hasOne(Phone::class);  // SELECT * FROM phones WHERE user_id = 1 LIMIT 1
	}

	/**
	 * Get the full name
	 *
	 * @return string
	 */
	public function getFullName() {
		return $this->first_name . ' ' . $this->last_name;
	}
}
