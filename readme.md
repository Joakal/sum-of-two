## About Sum Of Two

A project developed to answer the task of determining whether a number is a sum of two cubes with a variety of languages. For example, browse towards to see. http://sum.joakal.com/

This project currently supports the following languages:
JavaScript
PHP
MongoDB
MySQL

## Requirements

MongoDB 3.4.5 or higher
PHP 7.0.18 or higher
Composer 1.4.2 or higher
MySQL 14.14 or heigher

## Installatioin

composer update
php artisan db:seed

Note: To use the MySQL Store procedure, load the sumoftwo.sql into MySQL DB.

## License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Bugs

Migration issue with mongodb. The following doesn't work. Active MongoDB issue.
Schema::dropIfExists('');
https://github.com/jenssegers/laravel-mongodb/issues/1201
