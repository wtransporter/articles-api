## About App

This is simple REST application for test purpose.

## Config

Download / clone app. Navigate to project folder. Install composer dependencies (composer install).
Install npm dependencies (npm install). Create .env file (copy from .env.example).
Generate application key (php artisan key:generate). Create empty DB and set up .env file with database information.
Run migrations (php artisan migrate). Seed database (php artisan db:seed).

## Api Endpoints

- api/articles (get all articles)
- api/article/{id} (get article by id)
- api/article (update article by id)
- api/articles (store new article)
- api/article/{id} (delete article by id)

## License

The application is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
