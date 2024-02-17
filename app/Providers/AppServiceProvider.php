<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Pagination\Paginator;
Use Illuminate\Support\Facades\Event;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // URL::forceScheme('https'); //Deshabilitado por defecto por si no vas a usar HTTPS

        // Paginator::useBootstrapFive(); // Por si acaso usas en algún momento el paginador de Bootstrap, esto es necesario aquí

        // Guarda cada una de las consultas realizadas a la BD
        Event::listen(QueryExecuted::class, function (QueryExecuted $event) {

            $sql = $event->sql;
            $bindings = $event->bindings;
            $time = $event->time;

            Log::channel('mysql')->info("Consulta: " . $sql);
            Log::channel('mysql')->info("Bindings: " . implode(', ', $bindings));
            Log::channel('mysql')->info("Tiempo: " . $time . " ms\n");

        });
    }
}
