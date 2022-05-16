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
    
Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/zaurbbb/moodlekiller-back-end-new.git
    cd moodlekiller-back-end
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

----

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh

# Code overview

## Dependencies
Zaur - founder and full-stack side
Umar - database expert 
Akniet - designer and front side

## Folders

- `app` - Contains all the Eloquent models
- `app/Http/Controllers/` - Contains all the controllers
- `database/factories` - Contains the model factory for all the models
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- (later)

## Environment variables

- `.env` - Environment variables can be set in this file (later)

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

