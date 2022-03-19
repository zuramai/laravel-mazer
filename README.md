![Image](https://raw.githubusercontent.com/zuramai/laravel-mazer/main/screenshot.png)
<h1 align="center">Mazer + Laravel Jetstream</h1>
<p align="center">Mazer is a Admin Dashboard Template that can help you develop faster. We bring Mazer with Laravel starter project. It's completely free and you can use it in your projects.</p>

## Main Template
If you want to check the original template in HTML5 and Bootstrap, [click here](https://github.com/zuramai/mazer) to open template repository.

## Installation
1. Clone this project
    ```bash
    git clone https://github.com/zuramai/laravel-mazer
    cd laravel-mazer
    ```
2. Install dependencies
    ```bash
    composer install
    ```
    And javascript dependencies
    ```bash
    yarn install && yarn dev

    #OR

    npm install && npm run dev
    ```

3. Set up Laravel configurations
    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. Set your database in .env

5. Migrate database
    ```bash
    php artisan migrate --seed
    ```

6. Serve the application
    ```bash
    php artisan serve
    ```

7. Login credentials

**Email:** user@demo.com

**Password:** password
## Contributing
Feel free to contribute and make a pull request.
