<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

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

## Install

<p>1 - Clone the repository</p>
<p>2 - Install composer (composer install)</p>
<p>3 - Create the database (database.sqlite) in database folder</p>
<p>4 - Create the .env file (copy .env.example)</p>
<p>5 - Install migrations (php artisan migrate)</p>
<p>6 - Run serve (php artisan serve)</p>

## POSTMAN
<p>Open API TEST EBANX.postman_collection.json in Postman to test the API</p>
<p>[Download postman](https://www.postman.com/).</p>
<p></p>

## Order to execute in POSTMAN
<p>1 - RESET STATE BEFORE STARTING TESTS</p>
<p>2 - BALANCE FOR NON-EXISTING ACCOUNT</p>
<p>3 - CREATE ACCOUNT WITH INITIAL BALANCE (execute 2x for create a second account to transfer: first time include the number 10 (ten) in balance param and second time include the number 0 (zero)</p>
<p>4 - DEPOSIT INTO EXISTING ACCOUNT</p>
<p>5 - BALANCE FOR EXISTING ACCOUNT</p>
<p>6 - WITHDRAW FROM NON-EXISTING ACCOUNT</p>
<p>7 - WITHDRAW FROM EXISTING ACCOUNT</p>
<p>8 - TRANSFER FROM EXISTING ACCOUNT</p>
<p>9 - TRANSFER FROM NON-EXISTING ACCOUNT</p>

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
