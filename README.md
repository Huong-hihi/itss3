# HedBlog 

[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com)
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## About this project
This project is Web Programming Lab's final project. It is built as well as a platform to share everybody's knowledge about Information Technology and others.
## How to clone

Follow the following steps to clone this project: ❤❤

* Clone:
    * Using https: `git clone https://github.com/dangnam739/php_project.git` 
    * Using ssh: `git@github.com:dangnam739/php_project.git`
    * Using Github CLI: `gh repo clone dangnam739/php_project`
* Check out new branch: `git checkout -b {branch_name} origin/{branch_name}` 
* Install the composer's packages(Vendor): `composer install`
* Make a copy of **.env.example** file, rename it .env and **config your db's settings**
* Generate app's key: `php artisan key:generate`
* Migrating and seeding: `php artisan migrate:fresh --seed`
* Link storage: `php artisan storage:link`
* Start server with xampp or Laravel's built-in development server: `php artisan serve`
* The project is running at:
    * With xampp server: http://localhost:{your_port}/php_project/public/
    * With Laravel's built-in development server: http://localhost:{your_port}/
* <span style="color:red">Note:</span>
    * Do not modify anything in **main** branch, you have to checkout your own branch
    * Just modify only files **related to your task**, try not to modify **other files**
    * When modify the **.env** file run `php artisan config:cache` to make it work
    * Comannd  `php artisan migrate:fresh --seed` is to recreate your tables and reinsert into your tables
        * Just run: `php artisan migrate` to run migrating files ( create tables )
        * Just run: `php artisan migrate:fresh` to refresh migrating files
        * Just run: `php artisan db:seed` to insert into your tables
        * Run: `php artisan storage:link`
        * **Commannd `migrate` may run to error in ubuntu or MacOs, please wait Huy-san until he finds the solution**

## About Database

SQL Diagram:

<img src="https://github.com/dangnam739/php_project/blob/main/SQL_diagram.png">

## About us
* PM - Garbage Collector: Nguyen Quang Loc
* Database Designer - Secretary: Kieu Dang Nam
* Dev - Wibu: Le Minh Quang
* Dev - Hot girl 1: Nguyen Thi Hai Thanh
* Dev - Hot girl 2: Nguyen Thi Nguyet Anh
* Thanh 's mentor - Idol 4.0: Dao Dang Huy
