# Docker NGINX - MySQL PHP72

> How to run LEMP (NGINX - MySQL PHP72) project with Docker CE

[![Build Status](https://travis-ci.org/migueabellan/docker-lemp.svg?branch=master)](https://travis-ci.org/migueabellan/docker-lemp)


### Prerequisites

Docker installation is required, see the [official installation docs](https://docs.docker.com/install/).

* [Nginx](https://hub.docker.com/_/nginx/)
* [MySQL](https://hub.docker.com/_/mysql/)
* [PHP-FPM](https://hub.docker.com/r/phpdockerio/php72-fpm/)
* [PHPMyAdmin](https://hub.docker.com/r/phpmyadmin/phpmyadmin/)


### Download and install

Donwload using git

```sh
$ git clone https://github.com/migueabellan/docker-lemp.git
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

This project use the following ports:

| Server     | Port |
|------------|------|
| Nginx      | 80 |
| MySQL      | 3306 |
| PHPMyAdmin | 8080 |