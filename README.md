# Laravel Ajax CRUD

This is a simple implementation of Ajax Crud with Laravel 5.8. 

# Installation
1. Clone the repository:
```
git clone https://github.com/mcnika/laravel-ajax-crud.git
```

2. Move to the newly created folder:
```
cd laravel-ajax-crud
```

3. Install all the dependencies:
```
composer install
```

4. Create a new database. Then rename .env.example to .env and provide your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

5. Migrate the database:
```
php artisan migrate
```

6. Fill the tables with data:
```
php artisan db:seed --class=ContactsTableSeeder
```

7. Generate the application key:
```
php artisan key:generate
``` 

Now open the browser and visit the app. Note! you will need to login to see just created data. Open the database, for example with phpMyAdmin and grab the email address from users table. Use that email and "password" password to login.

You can also register and add your own contact list.

# Screenshots
Login:
![homepage](https://github.com/mcnika/laravel-ajax-crud/raw/master/public/images/login.jpg "Login")

Contacts list:
![homepage](https://github.com/mcnika/laravel-ajax-crud/raw/master/public/images/contacts-list.jpg "Contacts list")

Create a contact:
![homepage](https://github.com/mcnika/laravel-ajax-crud/raw/master/public/images/create-a-contact.jpg "Create a contact")

Delete a contact:
![homepage](https://github.com/mcnika/laravel-ajax-crud/raw/master/public/images/delete-a-contact.jpg "Delete a contact")

# Community Links
* [Author Website](http://mcnika.com/)