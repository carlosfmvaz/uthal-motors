
![logo](https://user-images.githubusercontent.com/43152329/119275240-4c31b700-bbea-11eb-8b3b-ebfe2629033c.png)


## About Uthal Motors

Uthal Motors is a simple vehicle announces registration platform entirely built using Laravel Framework! With the basics functionality of creating, editing, deleting, and showing items along with a basic authentication module using Livewire and Jetstream.

Some pages were built using JS + Jquery to render results from a filter without refreshing the page, making the application faster and dynamic!

And all the views were built using Blade.  

## API Integration

The project also contains a free location API integration called <a href='https://battuta.medunes.net'>Battuta</a>. This integration was important to prevent the user to type a Country/Region/City that does not exist! 
Otherwise, probably someone would create an announcement in Barcelona - USA 😊

## System structure

Due to the use of Laravel Framework, the system structure is based on MVC (Model/View/Controller).

## Setting Up

- You must have PHP 7+ and Composer installed
- Clone the repo typing "git clone https://github.com/CarlosFelipeM/uthal-motors"
- Cd into the project folder and run "composer install" to download all the Composer dependencies
- Run "npm install" to install all the required NPM packages
- Create a copy of the ".env.example" file and rename to ".env"
- Run "php artisan key:generate" to generate an app encryption key
- Create an empty database using the database tools you prefer 
- In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created
- Run "php artisan migrate" to migrate the entire database
- Run "php artisan serve" to run the application on your localhost

## Important

Before you create a new announce you must add some categories in the categories table. You can do this writing a simple insert sql query.

## Screenshots

![home](https://user-images.githubusercontent.com/43152329/119275120-a5e5b180-bbe9-11eb-86dc-2b6c50823b08.PNG)

![see offers](https://user-images.githubusercontent.com/43152329/119275145-cd3c7e80-bbe9-11eb-802e-cf04149ce4f7.PNG)

![register page](https://user-images.githubusercontent.com/43152329/119275150-d1689c00-bbe9-11eb-8217-bc85bd5f7b41.PNG)

![create announce](https://user-images.githubusercontent.com/43152329/119275159-d62d5000-bbe9-11eb-840e-51702b2515c4.PNG)

![my announces](https://user-images.githubusercontent.com/43152329/119275162-d7f71380-bbe9-11eb-810a-63ebd3d94262.PNG)

![edit announce](https://user-images.githubusercontent.com/43152329/119275165-d9c0d700-bbe9-11eb-9581-5b379d19bc5c.PNG)

![announce details](https://user-images.githubusercontent.com/43152329/119275166-db8a9a80-bbe9-11eb-90b4-33d4cdf84a4b.PNG)

