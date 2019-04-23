# Laravel Boilerplate

## What is Laravel Boilerplate

Laravel Boilerplate provides you many basic and advanced features to start a new project.
As each project requires different packages or libraries I tried to keep this one as simple as possible

Currently Laravel Boilerplate includes:

* Laravel 5.8
* Most used docker-containers with lots of dependencies (Credits and many thanks to [Laradock](https://github.com/laradock/laradock) as it is simplified version of laradock)
* Local SSL and HTTPS using openssl
* [Sentry](https://github.com/getsentry/sentry-laravel) package for error tracking 
* [Image Resize](https://github.com/MaximumAdvertising/laravel-image-resize) package for image resizing and cropping

## Installation

Laravel Boilerplate runs inside docker. In order to use it you must have Docker installed on your local computer. For more please check official [Docker Documentation](https://docs.docker.com/install)

* Install project project from source

```bash
composer create-project --prefer-dist maximumadvertising/laravel-boilerplate myproject
```
* Inside src create new .env file from .env.example
```bash
 cp src/.env.example src/.env
```

* Edit .env file Please be aware that boilerplate does not allow any special characters or spaces on project name

* run setup script in root folder

```bash
 ./setup
```
* Thats it!

Your project should be online at http://localhost or https://localhost
Please be aware that you'll get `Your connection to this site is not secure` warning because of self signed SSL certificates are not trusted by default. You can search for `how to make self signed ssl certificates trust` based on your operating system.

## Continuous Deployment

Laravel Boilerplate has bitbucket pipelines as default. In order to activate continuous deployment you'll have to:
1) Enable bitbucket pipelines in your bitbucket repository
2) Generate an SSH key under repo settings -> pipelines -> SSH Keys and add it to your server(s) under `~\.ssh\authorized_keys`
3) Add the fingerprints of your server(s) in repo settings -> pipelines -> SSH Keys.
4) Add your server(s) SSH key to bitbucket settings -> General -> Access keys
5) Update the `deployment/staging/deploy.sh` and `deployment/production/deploy.sh` files with your correct project name, project root and server username@ip.


## Error reporting

Error reporting is included by default through [Sentry](https://github.com/getsentry/sentry-laravel). To set it up for your project:
1) Go to [Sentry.io](https://sentry.io) and register and organization 
2) Create a project within your organization, make sure you select `Laravel` as your project's framework
3) After successfully creating a project, you'll see a screen with setup instructions and a URL with your DSN. Copy that URL and paste it in your `.env` after `SENTRY_LARAVEL_DSN=`.
4) (Optional) If you want release tracking in Sentry as well, you'll have to setup bitbucket pipelines and add these repository variable: `SENTRY_ORGANIZATION`, `SENTRY_PROJECT` and `SENTRY_TOKEN`. Additionally you'll also have to link your bitbucket repository to your Sentry account.