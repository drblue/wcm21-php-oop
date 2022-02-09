<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * Get the user that owns this account.
	 */
	public function user() {
		return $this->belongsTo(User::class);
	}
}
