# Careermap Test Application - 2023

## Introduction

This is a test application for the Careermap Application Process. It is a simple web application that allows users to view a list of jobs, create new jobs & view single job posts.

### Getting Started

To get started with the application you will need to do the following:

- Clone the repo to your device
- Run `composer install`
- Run `cp .env.example .env`
- Add your database credentials to the .env file under the `DB_` section as shown below:
```
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` to fill the database with 30 dummy jobs
- Run `php artisan cooker:cook` to generate the minified js & css files

The project should now be ready to use. If you are not running Laravel Valet or Herd, please run `php artisan serve` to start the application.

#### Please Note:

- I have used [Genericmilk/Cooker](https://github.com/genericmilk/cooker) to minify the CSS & JS files for this project. I have opted to use this as it is a package that I have worked with on multiple projects over the course of 3 years. I am very familiar with the package and it's functionality. It allows me to quickly and easily call files from CDN and local libraries and compile them into a minified singular file whilst also allowing me to specify different versions for development & production environments.

Thankyou for taking the time to look at my application.<br>
Nathan Langer<br> [nlanger.dev](https://nlanger.dev)


