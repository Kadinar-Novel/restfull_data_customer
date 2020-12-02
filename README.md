How to install this project?.

- Open with your console/terminal
- Clone this repositories
- Composer install
- Create database at your server / local server
- Change .env according to your database configuration
- Run php artisan migrate 

How to test?

- Open postman
- Run project at port 8000 at your console/terminal, php -S localhost:8000 -t public
- To create data customer:
    - at postman with method POST and Request URL localhost:8000/create_customer
    - in the body fill with raw json type for the parameters
    {
        "name": "Novel Lagi",
        "email": "novellagi@gmail.com",
        "password": "password123",
        "gender": "P",
        "is_married": "Yes",
        "address": "Jalan jalan sore yu"
    }
- To show data customer:
    - at postman with method GET and Request URL localhost:8000/show_all_customer
- To show detail data customer:
    - at postman with method GET and Request URL localhost:8000/show_detail_customer/{id}
- To update data customer:
    - - at postman with method PUT and Request URL localhost:8000/update_customer/{id}
    - in the body fill with raw json type for the parameters
    {
        "name": "Novel Lagi",
        "email": "novellagi@gmail.com",
        "password": "password123",
        "gender": "P",
        "is_married": "Yes",
        "address": "Jalan jalan sore yu"
    }
- To delete data customer
    - at postman with method DELETE and Request URL localhost:8000/delete_customer/{id}

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
