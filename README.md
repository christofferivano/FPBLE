# TOKO ALAT TULIS KANTOR

## Instruction :
1. Clone respository to your local folder 
    ```sh
    git clone https://github.com/ryanf10/FP-LBE-RPL-Kelompok1.git <folder name>
    ```  
2. Install `laravel/ui` package

    ```sh
    composer require laravel/ui "^1.0"
    ```
3. Run
    ```sh
    composer dump-autoload
    ```

4. Duplicate .env.example and rename to .env

5. Create a database named `laravel` in your `SQL` and to create basic users table, run
    ```sh
    php artisan migrate:fresh
    ```
6. Generate application encryption key
    ```sh
    php artisan key:generate
    ```
6. To view, run 
    ```sh
    php artisan serve
    ``` 
*do instruction 2-7 in your project folder
