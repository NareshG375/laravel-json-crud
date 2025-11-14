🧩 Laravel JSON CRUD Operations

This project demonstrates how to perform simple CRUD (Create, Read, Update, Delete) operations on a JSON column using Laravel’s web routes, controllers, and Blade views.
Instead of storing multiple fields separately, the project stores user information inside a single JSON field and provides UI-based CRUD functionality.


🚀 Features

1. Add JSON data through a form

2. Display JSON values in a table

3. Edit & update stored JSON values

4. Delete specific JSON keys or complete records

5. Simple & clean UI using Blade

6. Automatic JSON casting in Eloquent

7. Validation included for form inputs

📦 Project Installation

1️⃣ Clone the Repository
    
    git clone https://github.com/NareshG375/laravel-json-crud.git
    cd your-repo-name

2️⃣ Install Laravel Dependencies

    composer install
    cp .env.example .env

    Update your .env file:

    DB_DATABASE

    DB_USERNAME

    DB_PASSWORD

4️⃣ Generate Application Key
  
   php artisan key:generate


5️⃣ Run Database Migrations

    php artisan migrate

6️⃣ Start the Laravel Development Server

    php artisan serve

    Your project will now run at: http://127.0.0.1:8000

🧰 Technologies Used

    1.Laravel Framework 12.x &  PHP: 8.2+

    2.Blade Template Engine

    3.Eloquent ORM

    4. MySQL JSON Column

    5. Laravel Validation


🎯 Who This Project Is For

   1. Beginners learning Laravel CRUD

   2. Students practicing JSON-based storage

   3. Developers wanting dynamic metadata storage

   4. Anyone exploring MySQL JSON columns    



