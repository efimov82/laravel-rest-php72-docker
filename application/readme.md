# Rest-Api on Laravel PHP Framework

## Install

cd PROJECT_DIR

Edit Database Connections in file 
./config/database.php 

Edit file .env-example and Save as .env

In console execute commands:

```
1. composer install
2. php artisan migrate
3. php artisan db:seed
```

## Run project

php artisan serve

Open http://localhost:8080/

## Generate REST-API Documentation

In console execute commands:

```
  php artisan docs:generate
```

Open http://localhost:8080/api/index.html
