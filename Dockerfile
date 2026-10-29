# Stage 1: Build stage
# 2.6.6 ships a 2024 CA bundle that still trusts the compromised eMudhra intermediates.
# No official Composer image vendors ca-bundle 1.6.0 yet. 2.10.3's system bundle rejects
# them, and Composer reads that file (/etc/ssl/certs/ca-certificates.crt).
FROM composer:2.10.3 AS composer

WORKDIR /app

COPY . .

RUN composer install


# Stage 2: Final image
FROM php:8.5

WORKDIR /app

COPY --from=composer /app /app

CMD ["php", "vendor/bin/codecept", "run", "Unit"]
