## Installation
- after cloning the project
1. composer install
2. setup DB settings in .env file
3. php artisan migrate || php artisan mirgrate:refresh --path/database/migrations/2022_05_25_000001_create_comments_table.php
4. php artisan serve
5. go to http://127.0.0.1:8000/comments
