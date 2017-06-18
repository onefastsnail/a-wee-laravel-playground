# A Dockerized Laravel App Something

Havent used Laravel in a few months, so spinning this up for fun :)/

## Spin up the stack

From project root level:

1. Copy and configure **/env/.env.example** to **/env/.env** (ensure all passwords are strong and filled in)
2. Run `docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q)` to stop all currently running containers
3. Run `docker-compose up -d --build` t build the docker stack
4. Visit [http://localhost](http://localhost)

## To stop the stack

Run this command at the project root.

* Run `docker-compose down`

## Nginx

* The HTTP auth username and password is 'test:test', and can be changed in `/nginx/conf/.htpasswd`. I just added this as i also use this on a droplet.
* If you need to change the name of public/ amend the /docker-compose.yml

## phpMyAdmin

There is a phpMyAdmin container running to give you a database management. This can be accessed from [http://localhost:8080](http://localhost:8080)

The database is stored in your users directory `~/dbs`, more specifically `laravel/data/mariadb` as i am using this in a local VM, and to prevent issues with mounted volume performance with databases.

Credentials are stored `/env/.env`.

## Usage

* The app code should be placed in `/app`
* The nginx public serving directory should be in `/app/public`

## Notes

* Refer to the Docker docs for more about commands [https://docs.docker.com/engine/reference/commandline/cli/](https://docs.docker.com/engine/reference/commandline/cli/)
* For docker-compose commands refer to [https://docs.docker.com/compose/reference/](https://docs.docker.com/compose/reference/)

## Contributors

Paul Stewart