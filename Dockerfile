# Stage 1: Build stage
FROM composer:2.6.6 AS composer

WORKDIR /app

COPY . .

RUN composer install


# Stage 2: Final image
FROM php:8.3

WORKDIR /app

COPY --from=composer /app /app

CMD ["php", "vendor/bin/codecept", "run", "Unit"]