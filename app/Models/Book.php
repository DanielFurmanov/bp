<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $title
 * @property int $year
 * @property int $publisher_id
 * @property Publisher $publisher
 * @property string $annotation
 * @property string $cover
 * @property string $slug
 */
class Book extends BaseModel {
	const IMG_FOLDER = '/img/';

	public $timestamps = false;

	public function getId(): int {
		return $this->id;
	}

	public function getTitle(): string {
		return $this->title;
	}

	public function getYear(): int {
		return $this->year;
	}

	public function getCover(): string {
		return $this->cover;
	}

	public function getSlug(): string {
		return $this->slug;
	}

	public function getCoverFilePath(): string {
		return static::IMG_FOLDER.$this->getCover();
	}

	public function getAnnotation(): string {
		return $this->annotation;
	}

	/**
	 * @return BelongsTo|Publisher
	 */
	public function publisher() {
		return $this->belongsTo(Publisher::class);
	}

	public function setTitle(string $title) {
		$this->title = $title;
	}

	public function setYear(int $year) {
		$this->year = $year;
	}

	public function setPublisher(Publisher $publisher) {
		$this->publisher()->associate($publisher);
	}

	public function setAnnotation(string $annotation) {
		$this->annotation = $annotation;
	}

	public function setCover(string $imgName) {
		$this->cover = $imgName;
	}

	public function setSlug(string $slug) {
		$this->slug = $slug;
	}

}
