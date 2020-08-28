# AdminLTE dengan Laravel 7
Admin LTE  dengan Component Laravel 7

## Use
- Laravel 7 ([https://laravel.com/](https://laravel.com/))
- Bootstrap v4.4.1 ([https://getbootstrap.com/](https://getbootstrap.com/))
- AdminLTE  v3.0.5 ([https://adminlte.io/](https://adminlte.io/))

## Instalasi
Instal adminlte dengan composer :

`composer require aldhix/altar`

Publish provider pada laravel :

`php artisan vendor:publish --provider=Aldhix\Altar\ServiceProvider`

Untuk mengujinya tambahkan route demo di route web.php:

`Demo::routes()`

Buat server laravel :

`php artisan serv`

kemudian ketikan pada browser http://localhost:8000/demo 

