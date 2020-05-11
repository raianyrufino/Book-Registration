### Installation
Cloning the directory:
```bash
$ git clone https://github.com/raianyrufino/Book-Registration
```

### Access the repository folder.
```bash
$ cd Book-Registration
```

### Download project dependencies via composer.
``` bash
$ composer update
```

## Creation of the local configuration file:
`` bash
cp .env.example .env
``

### Make the necessary settings in .env:

```
APP_ENV = location
APP_DEBUG = true
APP_KEY = Hadouken
APP_URL = http: // localhost

JWT_SECRET = Shoryuken

DB_CONNECTION = pgsql
DB_HOST = 127.0.0.1
DB_PORT = 5432
DB_DATABASE =
DB_USERNAME =
DB_PASSWORD =
```

## Generate the database structure:
``` bash
php artisan migrate
```

### Code style

PSR-2 and PSR-12

### Execution
Run the project in a development environment.

```bash
$ php -S localhost:8080
```
