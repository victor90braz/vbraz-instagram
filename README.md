# vbraz-instagram

**vbraz-instagram** is a social networking application for photo sharing built with PHP and Laravel. It utilizes MySQL for database management.

## Getting Started

Follow these steps to set up and run the application locally:

### Prerequisites

-   PHP
-   Laravel
-   MySQL
-   Composer (for Laravel dependencies)

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/victor90braz/vbraz-instagram
    ```

2. Navigate to the project's root directory:

    ```bash
    cd vbraz-instagram
    ```

3. Install Laravel dependencies using Composer:

    ```bash
    composer install
    ```

4. Create a `.env` file by copying the example:

    ```bash
    cp .env.example .env
    ```

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Configure your database connection in the `.env` file, including the database name, username, and password.

7. Run database migrations to create the necessary tables:

    ```bash
    php artisan migrate
    ```

### Running the Application

Start the application on your local server:

```bash
php artisan serve
```

Access the application in your web browser at `http://localhost:8000`.

### Available Scripts

-   **Development Server:**

    ```bash
    npm run dev
    ```

-   **Build for Production:**

    ```bash
    npm run build
    ```

-   **Start Laravel Server:**

    ```bash
    php artisan serve
    ```

-   **Migrate Database:**

    ```bash
    php artisan migrate
    ```

-   **Rollback Database Migrations:**

    ```bash
    php artisan migrate:rollback
    ```

-   **Create a New Controller:**

    ```bash
    php artisan make:controller
    ```
