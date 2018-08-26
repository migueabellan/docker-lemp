# Docker NGINX PHP72 MySQL

> How to run php project with Docker CE

### Prerequisites

Docker installation is required, see the [official installation docs](https://docs.docker.com/install/).

### Download and install

Donwload using git

```sh
$ git clone https://github.com/migueabellan/docker-php.git
```

Run container

```sh
$ docker-compose up -d
http://localhost
```

Install with composer

```sh
$ mv .env.dist .env

$ docker-compose run php-fpm composer update
```

Units tests

```sh
$ docker-compose run php-fpm ./vendor/bin/phpunit ./tests
```