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
     */
    protected $fillable = ['name', 'age'];

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
}
