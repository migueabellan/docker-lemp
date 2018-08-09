# Hello World

> How to run php "Hello world" with docker

Build image

```sh
$ docker build hello .
```

Run container

```sh
$ docker run -d -p 8080:80 hello
```

Access

```sh
http://localhost:8080
```