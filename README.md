# INVENTORY PROJECT

- ## BACKEND: **laravel 7**
  - $ cd backend
  - $ composer install
  - $ php artisan key:generate
  - $ php artisan jwt:secret
  - copy .env.example to .env and set:
    - DB_DATABASE=
    - DB_USERNAME=
    - DB_PASSWORD=
  - $ php artisan serve

- ## FRONTEND: **React TSX**
  - $ cd frontend
  - $ yarn
  - $ yarn start
