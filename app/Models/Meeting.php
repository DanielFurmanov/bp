<?php

namespace App\Models;

use Carbon\Carbon;

/** @property int id */
/** @property string description */
/** @property City city */
/** @property Carbon date_start */
/** @property Carbon date_end */
/** @property Carbon time_start */
/** @property Carbon time_end */
/** @property bool active */
/** @property string address */
class Meeting extends BaseModel {
	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}

	/**
	 * @return mixed
	 */
	public function getCity()  {
		return $this->city;
	}

	/**
	 * @return mixed
	 */
	public function getDateStart()  {
		return $this->date_start;
	}

	/**
	 * @return mixed
	 */
	public function getTimeStart()  {
		return $this->time_start;
	}

	/**
	 * @return mixed
	 */
	public function getDateEnd()  {
		return $this->date_end;
	}

	/**
	 * @return mixed
	 */
	public function getTimeEnd()  {
		return $this->time_end;
	}

	/**
	 * @return mixed
	 */
	public function getActive()  {
		return $this->active;
	}

	/**
	 * @return string
	 */
	public function getAddress()  {
		return $this->address;
	}

	/**
	 * @param string $description
	 */
	public function setDescription(string $description) {
		$this->description = $description;
	}

	/**
	 * @param City $city
	 */
	public function setCity(City $city)  {
		$this->city = $city;
	}

	/**
	 * @param string $description
	 */
	public function set(string $description)  {
		$this->description = $description;
	}

	/**
	 * @param $dateStart
	 */
	public function setDateStart($dateStart)  {
		$this->date_start = $dateStart;
	}

	/**
	 * @param $time_start
	 */
	public function setTimeStart($time_start)  {
		$this->time_start = $time_start;
	}

	/**
	 * @param $date_end
	 */
	public function setDateEnd($date_end)  {
		$this->date_end = $date_end;
	}

	/**
	 * @param $time_end
	 */
	public function setTimeEnd($time_end)  {
		$this->time_end = $time_end;
	}

	/**
	 * @param bool $active
	 */
	public function setActive(bool $active)  {
		$this->active = $active;
	}

	/**
	 * @param string $address
	 */
	public function setAddress(string $address)  {
		$this->address = $address;
	}

}
