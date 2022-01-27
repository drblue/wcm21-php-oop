<?php

class User extends Model {
	public int $id;
	public string $first_name;
	public string $last_name;

	public static $table = 'users';
}
