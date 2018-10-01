<?php

namespace App\Models;

use Carbon\Carbon;
use InvalidArgumentException;

/**
 * @property int id
 * @property string text
 * @property Carbon date
 * @property string author
 * @property string avatar
 * @property string comment
 *
 * @property City city
 */
class Review extends BaseModel {

	const AVATARS_FOLDER = '/img/avatars/';

	const AVATARS = [
		1 => self::AVATARS_FOLDER.'boy.svg',
		2 => self::AVATARS_FOLDER.'man.svg',
		3 => self::AVATARS_FOLDER.'woman1.svg',
		4 => self::AVATARS_FOLDER.'woman2.svg',
		5 => self::AVATARS_FOLDER.'woman3.svg',
		6 => self::AVATARS_FOLDER.'woman4.svg',
	];

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getFullText(): string {
		return $this->text;
	}
	/**
	 * @return string
	 */
	public function getShortText(): string {
		$shortText = strip_tags($this->text);

		if (mb_strlen($shortText) > 200) {
			$shortText = preg_replace('/\s+?(\S+)?$/', '', substr($shortText, 0, 201)).'...';
		}

		return $shortText;
	}

	/**
	 * @param string $text
	 */
	public function setText(string $text) {
		$this->text = $text;
	}

	/**
	 * @return Carbon
	 */
	public function getDate(): Carbon {
		return new Carbon($this->date);
	}

	/**
	 * @param Carbon|string $date
	 */
	public function setDate($date) {
		$this->date = $date instanceof Carbon ? $date->format('d-m-Y') : $date;
	}

	/**
	 * @return string
	 */
	public function getAuthor(): string {
		return $this->author;
	}

	/**
	 * @param string $author
	 */
	public function setAuthor(string $author) {
		$this->author = $author;
	}

	/**
	 * @return string
	 */
	public function getAvatar(): string {
		return $this->getAvatars()[$this->avatar];
	}

	public function setAvatar(int $avatarKey) {
		if (!array_key_exists($avatarKey, $this->getAvatars())) {
			throw new InvalidArgumentException('No such avatar key');
		}

		$this->avatar = $avatarKey;
	}

	public function city() {
		return $this->belongsTo(City::class);
	}



	public function getAvatars(): array {
		return self::AVATARS;
	}

	// todo this method is a candidate for deletion, check usage
	public function getRandomAvatar(): string {
		$avatarsArray = $this->getAvatars();

		return $avatarsArray[array_rand($avatarsArray)];
	}


	public static function getRandomMansAvatar(): string {
		return array_random([
			static::AVATARS[1],
			static::AVATARS[2],
		]);
	}

	public static function getRandomWomansAvatar(): string {
		return array_random([
			static::AVATARS[3],
			static::AVATARS[4],
			static::AVATARS[5],
		]);
	}

	public function setComment(?string $comment) {
		$this->comment = $comment;
	}

	public function getComment(): ?string {
		return $this->comment;
	}

	public function setCity(?City $city) {
		$this->city()->associate($city);
	}

	public function getCity(): ?City {
		return $this->city;
	}
}
