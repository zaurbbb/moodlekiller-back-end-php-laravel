# Moodlekiller Back-End

> ### Back-End realization of [m00dlekiller-front-end](https://github.com/zaurbbb/m00dlekiller-front-end)

The project was developed in Laravel PHP framework.

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/zaurbbb/moodlekiller-back-end.git

Switch to the repo folder

    cd moodlekiller-back-end

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env
    
Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Environment variables

- `.env` - Environment variables can be set in this file

    APP_NAME=Laravel
    
    APP_ENV=local
    
    APP_KEY=
    
    APP_DEBUG=true
    
    APP_URL=http://localhost

    LOG_CHANNEL=stack
    
    LOG_DEPRECATIONS_CHANNEL=null
    
    LOG_LEVEL=debug
    

    DB_CONNECTION=mysql
    
    DB_HOST=127.0.0.1
    
    DB_PORT=3306
    
    DB_DATABASE=laravel
    
    DB_USERNAME=root
    
    DB_PASSWORD=
