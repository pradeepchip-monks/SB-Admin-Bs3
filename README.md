SB Admin modified for Laravel 5.4
By: Pradeep Chaurasia

This project is a modification of Free Admin Bootstrap Theme SB Admin to Laravel 5.4 Theme.

Installation
git clone this repository and cd inside the project root, then enter the following commands
Make sure you have installed npm and yarn globally
On the command prompt run the following commands
cd directory
composer install --prefer-dist -vvv (might take a while to complete)
cp .env.example .env
php artisan key:generate
php artisan serve
Open the browser and go to http://localhost:8000
Requirements
This software uses the Laravel framework.

Currently, Laravel 5.4 is being used.

If you are getting any error, it is most probably due to unfulfilled requirements of the framework itself.

