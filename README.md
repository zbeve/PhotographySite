## PhotographySite README

### MYSQL COMMAND LINE
```
-brew services start mysql
-create database name;
-use database name;
-show tables;
-php artisan migrate
-php artisan migrate:refresh
```
### SASS
```
-sass global.scss:output.css
-sass --watch global.scss:output.css
```
### MAMP
```
-80
-80
-3360
-5.6.30
-Cache Off
-Apache
-Public
-MySQL Active Version 5.6.35
```

Using SQL Pro to access tables




for server prep:
index.php
require __DIR__.'/../bootstrap/autoload.php';   -->  require __DIR__.'/../laravel/bootstrap/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';  --> $app = require_once __DIR__.'/../laravel/bootstrap/app.php';

database:
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=zackbeveridgephotography
DB_USERNAME=zackadmin
DB_PASSWORD=admin
