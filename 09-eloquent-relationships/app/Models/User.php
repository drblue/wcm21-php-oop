<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	/**
	 * Get the full name
	 *
	 * @return string
	 */
	public function getFullName() {
		return $this->first_name . ' ' . $this->last_name;
	}
}
