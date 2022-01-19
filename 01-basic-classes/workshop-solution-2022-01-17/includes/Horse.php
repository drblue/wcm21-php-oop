<?php

/**
 * 🥝
 */

class Horse {
	public $name;
	public $breed = 'mixed';
	public $color = 'grey';
	public $height = 'N/A';
	public $weight = 'N/A';
	public $sex = 'unknown';
	protected $owner;

	public function getInfo() {
		return "
			<dl>
				<dt>Breed</dt>
				<dd>{$this->breed}</dd>

				<dt>Color</dt>
				<dd>{$this->color}</dd>

				<dt>Height</dt>
				<dd>{$this->height} cm</dd>

				<dt>Weight</dt>
				<dd>{$this->weight} kg</dd>

				<dt>Sex</dt>
				<dd>{$this->sex}</dd>
			</dl>
		";
	}

	public function getOwner() {
		if (empty($this->owner)) {
			return "Adopt plz?";
		}

		return $this->owner;
	}

	public function hasOwner() {
		return !is_null($this->owner);
	}

	public function setOwner($name) {
		if (!is_string($name) || empty($name)) {
			return false;
		}
		$this->owner = $name;
	}
}
