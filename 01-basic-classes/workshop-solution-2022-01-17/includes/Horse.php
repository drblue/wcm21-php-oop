<?php

/**
 * 🥝
 */

class Horse {
	public $name;
	public $breed;
	public $color;
	public $height;
	public $weight;
	public $sex;
	public $owner;

	public function getInfo() {
		return "{$this->name} is a {$this->color} {$this->sex} {$this->breed}. They are {$this->height} cm tall and weighs {$this->weight} kg.";
	}

	public function getOwner() {
		return $this->owner;
	}

	public function setOwner($name) {
		$this->owner = $name;
	}
}
