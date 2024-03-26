# Inventory Manager README

Welcome to Inventory Manager! This Laravel project is designed to implement an Inventory Management System for ITS at Mississippi State University.

## Getting Started

### Clone the Repository

```bash
git clone https://github.com/your-username/your-project.git
cd your-project
```

### Install Dependencies

Make sure you have the following dependencies installed on your system:

- PHP (>= 7.4)
- Composer
- MySQL

If you haven't installed PHP, Composer, or MySQL, please refer to their respective documentation for installation instructions.

Once you have the dependencies installed, run the following command to install PHP dependencies using Composer:

```bash
composer install
```

### Configure the Environment

Duplicate the `.env.example` file and rename it to `.env`. Update the following variables in the `.env` file with your MySQL database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### Generate Application Key

Run the following command to generate the application key:

```bash
php artisan key:generate
```

### Migrate the Database

Run the following command to migrate the database:

```bash
php artisan migrate
```

### Start the Development Server

You can start the development server using the following command:

```bash
php artisan serve
```

This will start the server on `localhost:8000`. You can access your Laravel application by visiting `http://localhost:8000` in your web browser.

## Additional Information

For more information on how to use Laravel, please refer to the [Laravel Documentation](https://laravel.com/docs).

If you encounter any issues or have any questions, feel free to [open an issue](https://github.com/philip-r-haggard/inventory-manager/issues) on GitHub.
