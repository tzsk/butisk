## System Requirements

- PHP > 7.3
- Composer
- Node JS > 10

## Setup

1. **Install Dependencies**
```shell script
composer install && npm install
```

2. **Configure Application**
```shell script
composer configure
```

Then add your environment keys in `.env` file.

3. **Bootstrap Application**
```shell script
php artisan migrate:fresh --seed
```

4. **Start Application**
```shell script
php artisan serve
```

5. **PHP Linting**
```shell script
composer lint
```

Now start development
