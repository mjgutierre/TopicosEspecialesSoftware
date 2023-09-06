<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;


/**
 * PROFILE ATTRIBUTES
 * $this->attributes['id'] - int - contains the product primary key (id)
 * $this->attributes['name'] - string - contains the profile name
 * $this->attributes['email'] - string - contains the profile email
 */

class Profile extends Model
{
    protected $table = "profiles";
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function validateLoginCredentials(array $data)
    {
        $validator = Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->messages()->toArray());
        }
    }

    public function validatesignupCredentials(array $data)
    {
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:profiles',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->messages()->toArray());
        }
    }

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

    public function getEmail(): string
    {
        return $this->attributes['email'];
    }

    public function setPasswordAttribute(string $password): void
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public $timestamps = true;
}
