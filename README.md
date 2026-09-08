# Library System

## Description

Simple Library Information System built with Laravel and MySQL.

## Requirements

* PHP
* Composer
* MySQL
* Laravel

## Installation

1. Clone this repository:

```bash
git clone <repository-url>
cd library-system
```

2. Install dependencies:

```bash
composer install
```

3. Copy the environment file:

```bash
cp .env.example .env
```

4. Generate application key:

```bash
php artisan key:generate
```

5. Configure the database in `.env`:

```env
DB_CONNECTION=mysql
DB_DATABASE=library_system
DB_USERNAME=root
DB_PASSWORD=
```

6. Run database migrations:

```bash
php artisan migrate
```

7. Start the development server:

```bash
php artisan serve
```

8. Open the application in your browser:

```text
http://127.0.0.1:8000
```

## Author

Apriansyah Maulana
