# Laravel DataFactory LA Client

This package is a wrapper of
[DataFactory LA Client](http://github.com/mauro-moreno/datafactory-client) package
PHP Class for Laravel Framework.

## Installation

Using [composer](http://getcomposer.org)

```bash
$ composer require mauro-moreno/laravel-datafactory-client
```

```php
// config/app.php
<?php

return [
    'providers' => [
        // ...
        MauroMoreno\LaravelDataFactory\Provider\LaravelDatafactoryServiceProvider::class
        // ...
    ]
];
```
