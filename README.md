# Moodlekiller Back-End

> ### Back-End realization of https://bioneisme.github.io/m00dlekiller/

The project was developed in Laravel PHP framework.

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/zaurbbb/moodlekiller-back-end-php-laravel.git

Switch to the repo folder

    cd moodlekiller-back-end-php-laravel

Install all the dependencies using composer

    composer install
    
Go to the browser and open phpMyAdmin by http://localhost/phpmyadmin/ and create new table named "moodlekiller"

Go to the .env file and change DB_DATABASE=laravel to

    DB_DATABASE=moodlekiller
    
Migrate Database 

    php artisan migrate
    
Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000. You should be registered first, after you can manage site in phpMyAdmin with adding courses, users, marks and etc. You can see the demonstration of the project by the link https://youtu.be/csaKDw5NoEQ
