<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<h2>Descrição do projeto</h2>
<p>Criando um exemplo de importação de arquivos XLS e CSV para base de dados,e exportação de base de dados para arquivos XLS e CSV.</p>

<h3>Tecnologias e Frameworks utilizados:</h3>
<ul>
<li>Framework Laravel 5.4</li>
<li>MySQL Workbench</li>
</ul>


<h2>Instalação do plugin maatwebsite</h2>

Require this package in your `composer.json` and update composer. This will download the package and PHPExcel of PHPOffice.

```php
composer require "maatwebsite/excel:~2.1.0"
```

In Laravel 5.5 or higher, this package will be automatically discovered and you can safely skip the following two steps.

If using Laravel 5.4 or lower, after updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
Maatwebsite\Excel\ExcelServiceProvider::class,
```

You can use the facade for shorter code; if using Laravel 5.4 or lower, add this to your aliases:

```php
'Excel' => Maatwebsite\Excel\Facades\Excel::class,
```

The class is bound to the ioC as `excel`

```php
$excel = App::make('excel');
```

To publish the config settings in Laravel 5 use:

```php
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"
```

This will add an `excel.php` config file to your config folder.

<h3>Documentação</h3>

The complete documentation can be found at: [http://www.maatwebsite.nl/laravel-excel/docs](http://www.maatwebsite.nl/laravel-excel/docs)
