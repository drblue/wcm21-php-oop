<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// unless we declare a protected $table, Eloquent will assume
// the table is the lower-case plural form of the class's name.
class User extends Model {

	/**
	 * Get the accounts belonging to the user.
	 */
	public function accounts() {
		return $this->hasMany(Account::class);
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
