# Simple Commerce Starter Kit

This is the Simple Commerce Starter Kit. You can use this whenever you'd like to create a new e-commerce store with Statamic.

It comes with some boilerplate templates, standard routing and everything else needed for Simple Commerce to work.

## Quick Start

1. Create the site, remove our Git stuff and install dependencies

```
git clone git@github.com:doublethreedigital/simple-commerce-starter.git your-store
cd your-store
rm -rf .git
composer install
cp .env.example .env && php artisan key:generate
```

2. Configure your database in your `.env` file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. Migrate to create databse tables

```
php artisan migrate
```

4. Create your first user

```
php please make:user
```

5. **Do what you want!**
