<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Contenidos de esta plantilla

- Conversión de Tailwind a Bootstrap (usa Bootstrap 5)
- Login instalado, modifica la base de datos
- Livewire
- Spinner (estilos y script en layouts/app + include)
- Mensajes flash (include)
- Iconos Font Aweosme V6
- Redirección oblitaria HTTPS
- Envío de emails
- Trusted Proxies 🙂
- Modal de prueba en el layout
- Log con queries realizadas desde la app
- Logger modificado con inclusión de un canal customizado

## Como instalar

- Haz un git clone del layout, para descargarlo en donde quieres hostear la app
- Típico composer install para descargar vendor y toda la parafernalia esa
- Luego "npm install" para instalar node modules y luego "npm run build" para correr la app y mandar el vite
- Copia el .env example a un ".env", pon los datos que toquen en ese momento y edita el docker compose para que tenga los datos de la nueva app
- Ejecuta el "docker compose up -d" y mira a ver si se te levanta la app
- Añade el docker al Proxy y si quieres ponlo directamente con HTTPS. Recuerda cambiarlo en AppServiceProvider

## Cosas que sueles usar

- Añadir una FK a una tabla usando MySQL directamente

```
ALTER TABLE [TABLA A EDITAR]
ADD FOREIGN KEY ([CAMPO DE TABLA A EDITAR]) REFERENCES [TABLA ORIGEN]([CAMPO DE TABLA ORIGEN]);

Ej:
ALTER TABLE reservas
ADD FOREIGN KEY (id_apartamento) REFERENCES apartamentos(id);
```

- Restablecer el autoincrement. En "valor" pones el siguiente ID que se va a usar. Es decir, si pones el 1000, el siguiente registro de la tabla tendrá el 1000

```
ALTER TABLE [TABLA] AUTO_INCREMENT = [VALOR];
```

- El loading spinner se carga añadiendo la clase "loading" a cualquier botón. Esto lanzará el loading pero no se quitará hasta que resfresques la página. Puedes hacer pruebas con livewire para intentar mandar un evento desde el controler y quitar el spinner sin recargar

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
