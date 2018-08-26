# Docker NGINX PHP72 MySQL

> How to run php project with Docker CE

## Prerequisites

Docker installation is required, see the [official installation docs](https://docs.docker.com/install/).

### Download using git

```sh
$ git clone https://github.com/migueabellan/docker-php.git
```

### Install

```sh
$ mv .env.dist .env
$ docker-compose run composer install
```

### Run container

```sh
$ docker-compose up -d
```

### Access project

```sh
http://localhost
```