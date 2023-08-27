<?php 

namespace App\Interfaces;//  Interfaces to store images
use Illuminate\Http\Request;

interface ImageStorage {
    public function store(Request $request): void;
}
