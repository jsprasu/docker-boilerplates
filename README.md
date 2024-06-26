# Docker boilerplate containers for PHP, Nginx & MySQL

This project includes boilerplates for PHP, Nginx and MySQL docker containers.

## Installation

Before building the containers, please change below.

1. Change all the usage of 'sample-project' in docker-compose.yml file.
2. Change the app username, password and database name in initdb/create-user.sql file.
3. Change the domain 'sample-project.local' in nginx-conf/nginx.conf file.
4. Change the MySQL connect config values in index.php file.

Make sure you are in the correct path in the bash.

Build and start the containers.

```bash
docker-compose build
docker-compose up -d
```

Check whether the containers are up and running.

```bash
docker ps
```

Adding the host. Make sure to use the same domain used in step #3 above.

1. In Mac, /etc/hosts.
2. In Windows, C:\Windows\System32\drivers\etc\hosts.

```bash
127.0.0.1 sample-project.local
```

## Usage

Try visiting to the domain you used above in the browser and see whether it works.

In this case, it will be 'http://sample-project.local'.

## License

[MIT](https://choosealicense.com/licenses/mit/)