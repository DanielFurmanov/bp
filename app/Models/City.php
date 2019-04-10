<?php

namespace App\Models;

/**
 * @property int id
 * @property string name
 *
 */
class City extends BaseModel
{

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public static function oneByName(string $name): self
    {
        return static::query()->where('name', $name)
            ->firstOrFail();
    }
}
