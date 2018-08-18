# Hello World

> How to run php "Hello world" with Docker CE

## Prerequisites

Docker installation is required, see the [official installation docs](https://docs.docker.com/install/).

### Download using git

```sh
$ git clone https://github.com/migueabellan/docker-php.git
```

### Build the image

```sh
$ docker image build \
 --tag helloworld/v:1.0 .
```

### Run container in dev mode

```sh
$ docker container run \
 --detach \
 --publish 8080:80 \
 --name hello \
 --mount type=bind,source="$(pwd)/public",target=/var/www/html \
 helloworld/v:1.0
```

### Access project

```sh
http://localhost:8080
```