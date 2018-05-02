<?php

namespace App\Models;

/** @property string name */
class City extends BaseModel {
	
	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name): void {
		$this->name = $name;
	}
	
	
}
