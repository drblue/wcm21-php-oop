<?php

class Account extends Model {
	public int $id;
	public string $accountnumber;
	public int $balance;
	public int $user_id;

	public static $table = 'accounts';

	public static function getWhereUserId($user_id) {
		$dbh = static::getDbh(); // first time, a new connection will be established and saved in static::$dbh

		// prepare and execute query
		$table = static::$table;
		$query = $dbh->prepare("SELECT * FROM {$table} WHERE user_id = :user_id");
		$query->bindValue('user_id', $user_id);
		$query->execute();

		// get result
		$res = $query->fetchAll(PDO::FETCH_CLASS, static::class);

		// return result
		return $res;
	}
}
