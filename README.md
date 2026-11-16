# POS Application — IT0049 TFA6 (From Arrays to Eloquent)

A Laravel-based Point of Sale (POS) application rebuilt with a real database.
This activity replaces the static PHP arrays used in TFA5 with **Laravel migrations**, a **seeder**, and **Eloquent ORM**.

## Student Information

- **Name:** Butad, Carlos Joaquin A.
- **Section:** BSITCST - AC31
- **Professor:** Ms. Charity Canlas

## Learning Outcomes (ILO)

At the end of this exercise, students must be able to:

1. Create Laravel migrations for the `customers` and `users` tables.
2. Create and run a seeder to populate sample data.
3. Build Eloquent models for both tables.
4. Retrieve and display records in a Blade view.

## Project Structure

```
laravel-pos/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── CustomerController.php
│   │       └── UserController.php
│   └── Models/
│       ├── Customer.php
│       └── User.php
├── database/
│   ├── migrations/
│   │   ├── 2024_01_01_000001_create_customers_table.php
│   │   └── 2024_01_01_000002_create_users_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
├── resources/views/
│   ├── layouts/app.blade.php
│   ├── customers/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── show.blade.php
│   │   └── edit.blade.php
│   └── users/
│       ├── index.blade.php
│       ├── create.blade.php
│       ├── show.blade.php
│       └── edit.blade.php
├── routes/
│   └── web.php
├── composer.json
├── .env
└── .env.example
```

## Database Schema

### `customers`
| Column   | Type     | Details                    |
|----------|----------|----------------------------|
| id       | bigint   | primary key, auto-increment|
| full_name| string   | required                   |
| email    | string   | unique, required           |
| phone    | string   | nullable                   |
| timestamps| -       | created_at / updated_at    |

### `users`
| Column    | Type     | Details                    |
|-----------|----------|----------------------------|
| id        | bigint   | primary key, auto-increment|
| username  | string   | unique, required           |
| full_name | string   | required                   |
| email     | string   | nullable                   |
| password  | string   | nullable                   |
| timestamps| -       | created_at / updated_at    |

## Installation

1. Create a Laravel project:

   ```bash
   composer create-project laravel/laravel .
   ```

2. Copy the environment file and generate an app key:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. Configure your `.env` database settings (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

4. Run the migrations:

   ```bash
   php artisan migrate
   ```

5. Seed the sample data:

   ```bash
   php artisan db:seed
   ```

6. Serve the application:

   ```bash
   php artisan serve
   ```

## Functionality

- **Customers** — list, add, view, edit, and delete customer records.
- **Users** — list, add, view, edit, and delete user records.
- All controllers use **Eloquent** (`Customer::all()`, `User::all()`, `Customer::create()`, `User::create()`, etc.) instead of static arrays.
- Bootstrap 5 is used for a clean, responsive UI.

## Submission

- **GitHub repository:** https://github.com/cabutad/carlosjoaquinbutad (raw project files, including migrations and seeder)
- **Hosted version:** https://cabutad.free.nf (live, matches submitted code)

> Note: The GitHub repo and InfinityFree link above should be replaced with the live, final links once they are available.
