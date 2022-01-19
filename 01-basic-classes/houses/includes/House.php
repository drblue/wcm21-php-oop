<?php

class House {
	public $rooms;
	public $area;
	public $address;

	public function __construct($rooms, $area, $address) {
		$this->rooms = $rooms;
		$this->area = $area;
		$this->address = $address;
	}
}
