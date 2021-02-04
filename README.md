# Flamberg ROVER

This is the project repo of rover.flamberg.ch.

## Development

### Requirements
1. composer 2.0.9

2. npm

3. php 8.0.1

### Local Development
Run the following commands

`composer install`

`docker-compose up -d`

`docker exec -it roverflamberg_php-fpm_1 ash`

`php bin/console doctrine:database:create`

`php bin/console doctrine:migrations:migrate`

For development `npm run watch`

For production `npm run build`