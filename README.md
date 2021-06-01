# Batique API
API Documentation : [Batique API Documentation](https://koala-putar.github.io/batique-api-doc)
API Link : [Batique API](https://batique-api-uzot7wghja-et.a.run.app)
## Table of Contents
- [Table of Contents](#table-of-contents)
- [Dependencies](#dependencies)
- [Basic Installation](#basic-installation)
- [Deployment](#maven-scripts)
  
## Dependencies
1. PHP ^7.3|^8.0
2. Lumen Framework ^8.0
3. Composer
4. Mysql
5. Docker (Optional)

## Basic Installation

```sh
git clone https://github.com/Koala-Putar/batique-api.git
cd batique-api
composer install
php artisan migrate:fresh --seed
php -S localhost:8000 -t public
```

### docker for development environment

```
# run on development environment
# listening on http://localhost:8080
docker-compose -f docker-compose.dev.yml up

# remove containers
docker-compose down
```

## Deployment
- [Deploy on Google Cloud Platform ](https://github.com/Koala-Putar/batique-api/blob/master/doc/deploygcp.md)