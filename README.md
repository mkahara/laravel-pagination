## Laravel Pagination with Search and Sorting

This Laravel application demonstrates pagination, search and sorting using Livewire.

### Technology

1. The application runs on Laravel 11 using MySQL database
2. I have used Livewire as the only dependency.
3. npm manages the packages and dependencies in the project.
4. I used Vite for asset compilation and bundling during development.

### Installation

1. To make it easy to run this application, I have created a [Github repository](https://github.com/mkahara/laravel-pagination) whereby one can clone and run the project.
2. Navigate to the project directory.
    ```bash
    cd your-laravel-project
    ```
3. Clone the repository
    ```bash
    git clone https://github.com/mkahara/laravel-pagination.git
    ```
4. Install all dependencies.
    ```bash
    npm install
    ```
5. Install livewire.

    ```bash
    composer require livewire/livewire
    ```

6. Run the migration.

    ```bash
    php artisan migrate
    ```

7. Seed the database to populate with dummy data.

    ```bash
    php artisan db:seed
    ```

8. Run the project to generate a url accessible on the browser.
    ```bash
    php artisan serve
    ```

### Usage

This application is a single page web application accessible via the route `/opportunities`.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Author

Samuel Kahara - Github: [mkahara](https://github.com/mkahara)
