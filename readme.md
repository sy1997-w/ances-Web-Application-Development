# Advanced Web Application Development

Nice Teeth Dental Clinic

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.


### Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be

1. Install Composer

```
composer i
```
2. To link to database

```
copy .env.example .env

```
3. To edit to database in .env

```
DB_DATABASE=assignment
DB_USERNAME=root
DB_PASSWORD=

```
4. Create a database name "assignment"

5. To migrate:

```
php artisan migrate
```

6. And run

```
php artisan key:generate
php artisan serve
```



## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
