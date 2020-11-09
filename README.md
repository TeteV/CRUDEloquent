# PHP Eloquent RestFul
It's a simple backend CRUD make with:

[Eloquent](https://laravel.com/docs/8.x/eloquent) Eloquent Website.

## General instructions
In your DB gestor create a new database for this project.
```
create database DBNAME;
```

To use this backend you must to clone this repositorie.

And change some things in .env archive like you have in your DB 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DBNAME
DB_USERNAME=USERNAME
DB_PASSWORD=USERPSWD
```
To migrate Database
```
php artisan migrate
```
Once you're in your favorite IDE or not, go to the Terminal and go to the project path
and run with this command
```
php -S localhost:8000 -t ./public
```

Open your web browser and copy the link
```
http://localhost:8000
```

## Made with
[Php Storm](https://www.jetbrains.com/es-es/phpstorm/) Website.

Readme.md template by [Villanuevand](https://gist.github.com/Villanuevand/6386899f70346d4580c723232524d35a)

Github Icons by [rxaviers](https://gist.github.com/rxaviers/7360908)

---
💻 with 💜 by [TeteV](https://github.com/TeteV) 🐦

