<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the animal name
     * $this->attributes['age'] - int - contains the animal age
     * $this->attributes['type'] - string - contains the animal type (cat/dog)
     * $this->attributes['review'] - int - contains the animal review from 1 to 5
     */
    protected $fillable = ['name', 'age', 'type', 'review'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getAge(): int
    {
        return $this->attributes['age'];
    }

    public function setAge(int $age): void
    {
        $this->attributes['age'] = $age;
    }

    public function getType(): string
    {
        return $this->attributes['type'];
    }

    public function setType(string $type): void
    {
        $this->attributes['type'] = $type;
    }

    public function getReview(): string
    {
        return $this->attributes['review'];
    }

    public function setReview(int $review): void
    {
        $this->attributes['review'] = $review;
    }
}
