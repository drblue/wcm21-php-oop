<?php

namespace App\Models;

class User extends Model {
	public int $id;
	public string $first_name;
	public string $last_name;

	public static $table = 'users';

	public function getFullName() {
		return "{$this->first_name} {$this->last_name}";
	}
}
