set -aeuo pipefail

ssh -vvv user@ip 'cd /var/www/projectname/ \
&& git pull \
&& cd docker \
&& docker-compose -p projectname exec -T workspace composer install \
&& docker-compose -p projectname exec -T workspace php artisan migrate --force'