
# Laravel-Phonebook
<p>This is a phonebook appliation using <a href="https://laravel.com/">Laravel</a>, a <a href="https://www.php.net/">PHP</a> framework.</p>

## Features
1. Login and logout system
2. User can update and delete their credentials
3. Authorized upating, editing and deleting of phonebook details
4. User can reset password if forgotten

## How to run the project
Following steps should be followed inorder to run this project locally.
1. First of all, clone the project or download the zip and then extract the project.
2. Open the folder on the terminal and run the following command.
    * Composer dependecies
        `` composer install ``
    * For `npm` dependecies
        `` npm install ``
3. After that create a file `.env` and copy all the contents of `.env.example` file.
4. Create a MySQL database on your computer and save the details in `.env` file.
5. Migrate the database.
    `` php artisan migrate ``
    This will create all the necessary tables in the database.
6. Now, run the following code to serve the application locally:
    `` php artisan serve ``
