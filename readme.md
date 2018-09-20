# Laravel Elasticsearch MySQL Nginx stack on Docker

Simplified version of [Laradock](https://github.com/laradock/laradock) with minimum setup and scripts for common docker commands:

* Laravel (latest)
* PHP 7.2
* MySQL 5.7
* Nginx (Alpine)
* Elasticsearch 5.6.8 (optional)
* Local SSL using openssl

## Prerequisite
* Docker Compose
* Linux or macOS

## Installation


* run setup script in root folder

```bash
 ./setup
```

Your project should be online at http://localhost or https://localhost
Please be aware that you'll get `Your connection to this site is not secure` warning because of self signed SSL certificates are not trusted by default. You can search for `how to make self signed ssl certificates trust` based on your operating system.

## Scripts

* dc (docker-compose)
```bash
    ./dc 
    Available options: up down rebuild start stop logs ps top
```
* ws (workspace)
```bash
    ./ws
    Run command in the workspace container
    Usage: ./ws COMMAND [ARG...]
    Example: ./ws php -v
```
Common usage for .ws

```bash
    ./ws php
    ./ws composer
    ./ws npm
    ./ws yarn
```
* mysql
```bash
    ./mysql  
```

## Continuous Deployment

LaravelBoilerplate has bitbucket pipelines as default. In order to have auto deploy your code to your staging and production:
1) You need to give SSH access to Bitbucket Pipeline
2) You need to give SSH access from your server to your bitbucket account

Afterwards under *deployment/staging/deploy.sh* You need to specify
* SSH username and server ip
* Your project root
