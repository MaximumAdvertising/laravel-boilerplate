set -aeuo pipefail
source .env

if [ $# -eq 0 ]
then
    echo 'Run command in the workspace container'
    echo 'Usage: ./ws COMMAND [ARG...]'
    echo 'Example: ./ws php -v'
    exit
fi

( cd laradock ; docker-compose -p $APP_NAME exec workspace $@ )