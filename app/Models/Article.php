<?php

namespace App\Models;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $title
 * @property string $annotation
 * @property string $content
 * @property string $slug
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Article extends BaseModel {

	public function getTitle(): string {
		return $this->title;
	}

	public function setTitle(string $title): void {
		$this->title = $title;
	}

	public function getAnnotation(): string {
		return $this->annotation;
	}

	public function setAnnotation(string $annotation): void {
		$this->annotation = $annotation;
	}

	public function getContent(): string {
		return $this->content;
	}

	public function setContent(string $content): void {
		$this->content = $content;
	}

	public function getSlug(): string {
		return $this->slug;
	}

	public function setSlug(string $slug): void {
		$this->slug = $slug;
	}

}
