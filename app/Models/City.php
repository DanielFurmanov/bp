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

	public static function oneByName(string $name): self {
		echo 'Searching for '.$name.PHP_EOL;
		return static::where('name', $name)
			->firstOrFail();
	}
}
