
# SterlinLMS A Laravel LMS System

<img width="100%" height="720" alt="Screenshot 2025-10-15 033631" src="https://github.com/user-attachments/assets/b3829954-bee5-4ab0-9399-34dcdc1251ff" />

A simple Learning Management System built with Laravel and Tailwind CSS for managing students, courses, and batches.

## Features

- **Student Directory** - View all students in a table with ID, Name, Email, Registration Number, and Batch
- **Student Details Page** - Click View button to see personal info, courses, and batch details
- **Course Management** - Track courses with codes, credits, and descriptions
- **Batch Organization** - Organize students into different batches
- **Reusable Components** - Blade components for buttons and UI elements

## Quick Start

### Prerequisites
- PHP 8.1+
- MySQL
- Composer

### Setup & Run

```bash
# 1. Install dependencies
composer install

# 2. Setup environment
cp .env.example .env
php artisan key:generate

# 3. Configure database in .env
# DB_DATABASE=lms_app
# DB_USERNAME=root

# 4. Create database
mysql -u root -e "CREATE DATABASE lms_app;"

# 5. Run migrations & seeders
php artisan migrate
php artisan db:seed

# 6. Create session table
php artisan session:table
php artisan migrate

# 7. Start server
php artisan serve
```

Visit: `http://localhost:8000`

## Key Files

- `app/Models/` - User, Course, Batch models
- `database/migrations/` - Database schema
- `database/seeders/` - Sample data (5 students, 5 courses)
- `resources/views/` - Blade templates
- `routes/web.php` - Routes
- `resources/views/components/` - Reusable Blade components

## Run Tests

```bash
php artisan test
```

## Learn More

- [Laravel Docs](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com)
