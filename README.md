# juicebox_code_test

## Description

This is a simple RESTful API for a blog system built with Laravel. It includes endpoints for user registration, login, logout, and post management. It also demonstrates email handling and job dispatching with Laravel Queues.

## Prerequisites

- PHP 8.1 or higher
- Composer
- MySQL

## Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/fernandes-wiraharjo/juicebox_code_test.git
cd juicebox_code_test
```

### 2. Install Dependencies
Run the following command to install PHP and JavaScript dependencies:

```bash
composer install
```

### 3. Set Up Environment File
Copy the example environment file and configure it:

```bash
cp .env.example .env
```

Update the .env file with your database and mail configuration:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=example@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Migrations
Run the migrations to set up the database schema:

```bash
php artisan migrate
```

### 6. Set Up Laravel Sanctum
Publish the Sanctum configuration and run the Sanctum migrations:

```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
```

### 7. Set Up Mail Configuration
Ensure your mail configuration in .env is correct. You may use Mailtrap or any other SMTP server.

### 8. Run the Queue Worker
To process queued jobs, run the queue worker using:

```bash
php artisan queue:work
```

You can setup your queue connection driver at .env file on this key: (in my case, i use `database`)

```bash
QUEUE_CONNECTION=
```

This will listen for new jobs and process them as they come in. Make sure to run this command in a separate terminal or set it up to run as a background service.

### 9. Dispatch the Welcome Email Manually
To manually dispatch the welcome email job, use the following Artisan command in your console:

```bash
php artisan send:welcome-email
```

Please make sure that you had registered at least one user. Exit console with `exit`.

### 10. Running the Development Server
You can start the development server using:

```bash
php artisan serve
```

By default, the server will run at http://localhost:8000.

=====================================================================

API Endpoints
Users
POST /api/register: Register a new user.
POST /api/login: Login a user and return a token.
POST /api/logout: Logout the user and revoke the token.
GET /api/users/{id}: Get a specific user.

Posts
GET /api/posts: List all posts.
GET /api/posts/{id}: Get a specific post.
POST /api/posts: Create a new post.
PATCH /api/posts/{id}: Update an existing post.
DELETE /api/posts/{id}: Delete a post.

=====================================================================

Testing
To run PHPUnit tests, use:

```bash
php artisan test
```

Please create and configure the `.env.testing` file

=====================================================================

### Summary

- **Setup Instructions**: Provides steps to clone the repository, install dependencies, configure environment settings, and run migrations.
- **Queue Worker**: Instructions for running the queue worker.
- **Manual Dispatch**: Instructions for manually dispatching a welcome email job using Artisan Command.
- **API Endpoints**: Basic overview of the API endpoints available in the project.
- **Testing**: Command to run tests.

=====================================================================

THANK YOU
