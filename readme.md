# Sum Of Two

A project developed to answer the task of determining whether a number is a sum of two cubes with a variety of languages. For example, browse towards to see.
This project currently supports the following languages:
- JavaScript
- PHP
- MongoDB
- MySQL

## Requirements

Docker 17.06

## Installation

```
docker-compose up -d
docker-compose exec php php artisan migrate
docker-compose exec php php artisan db:seed
```
Navigate to http://localhost:8080/

## License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Bugs

Migration issue with mongodb. The following doesn't work. Active MongoDB issue.
```
Schema::dropIfExists('');
```
https://github.com/jenssegers/laravel-mongodb/issues/1201

MySQL does not allow cubic roots and it affects the calulations (ie 91 returns false instead of true). Performing POW(27,1/3) returns '2.9999999999999667'.
