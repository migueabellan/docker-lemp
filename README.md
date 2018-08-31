# Docker NGINX PHP72 MySQL

> How to run php project with Docker CE

[![Build Status](https://travis-ci.org/migueabellan/docker-php.svg?branch=master)](https://travis-ci.org/migueabellan/docker-php)


### Prerequisites

Docker installation is required, see the [official installation docs](https://docs.docker.com/install/).

### Download and install

Donwload using git

```sh
$ git clone https://github.com/migueabellan/docker-php.git
```

Create a `.env`

```sh
$ cp .env.dist .env
```

Build and run container

```sh
$ docker-compose build
$ docker-compose up -d
```

Install with `composer`

```sh
$ docker-compose run phpfpm composer install
```

Access project

```sh
http://localhost:1180
```

Units tests

```sh
$ docker-compose run phpfpm ./vendor/bin/phpunit ./tests
```