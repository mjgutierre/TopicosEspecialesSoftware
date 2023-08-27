<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ImageStorage;
use App\Util\ImageLocalStorage;

class ImageServiceProvider extends ServiceProvider
{
    public function register(): void // registra una implementación específica (ImageLocalStorage) para la interfaz ImageStorage en el contenedor de servicios
    //  de Laravel. cuando se solicita una instancia de ImageStorage, Laravel automáticamente proporcionará una instancia de 
    // ImageLocalStorage gracias a la inyección de dependencias. 
    {
        $this->app->bind(ImageStorage::class, function () {
            return new ImageLocalStorage();
        });
    }
}
