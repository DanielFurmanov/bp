<?php

namespace App\Models;

/**
 * Class Interview
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $image
 * @property string $description
 * @property string $full_text
 */
class Interview extends BaseModel {

	public function getTitle(): string
	{
		return $this->title;
	}

	public function setTitle(string $title): void
	{
		$this->title = $title;
	}

	public function getSlug(): string
	{
		return $this->slug;
	}

	public function setSlug(string $slug): void
	{
		$this->slug = $slug;
	}

	public function getImage(): ?string
	{
		return $this->image;
	}

	public function setImage(?string $image): void
	{
		$this->image = $image;
	}

	public function getFullText(): string
	{
		return $this->full_text;
	}

	public function setFullText(string $full_text): void
	{
		$this->full_text = $full_text;
	}

	public function getDescription(): string
	{
		return $this->description;
	}

	public function setDescription(string $description): void
	{
		$this->description = $description;
	}



}
