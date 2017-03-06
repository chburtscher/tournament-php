Tournament-PHP
==============

![](https://travis-ci.org/chburtscher/tournament-php.svg?branch=master)

Tournament-PHP is a management software for sports tournaments, primarily volleyball. It allows
you to manage tournaments of multiple play modes in a rich user-interface.

## Installation

Run the following commands after cloning this repository:

```
composer install
php artisan migrate
```

## Running the application

```
php artisan serve
```

Tournament-PHP is now nunning on your local machine's port 8080 ([http://127.0.0.1:8080](http://127.0.0.1:8080)).

## Running tests

You may run unit-tests from the command-line:

```
vendor/bin/phpunit
```

For more information visit the Laravel documentation on [unit-testing](https://laravel.com/docs/5.4/testing).
