<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Pagination\Paginator;
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
        DB::listen(function ($query): void {
            $sql = array_reduce($query->bindings, function ($sql, $binding) {
                return preg_replace('/\?/', is_numeric($binding) ? $binding : "'" . $binding . "'", $sql, 1);
            }, $query->sql) . ';';
            Log::channel('mysql')->debug('URL: ' . Request::url());
            Log::channel('mysql')->debug(PHP_EOL . $sql . PHP_EOL);
        });
    }
}
