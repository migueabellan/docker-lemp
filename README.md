# Docker NGINX - MySQL PHP72

> How to run LEMP (NGINX - MySQL PHP72) project with Docker CE

[![Build Status](https://travis-ci.org/migueabellan/docker-lemp.svg?branch=master)](https://travis-ci.org/migueabellan/docker-lemp)


### Prerequisites

Docker installation is required, see the [official installation docs](https://docs.docker.com/install/).

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
