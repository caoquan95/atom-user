# ./generate.sh {route}
# i.e ./generate.sh "api/v1/*"

php artisan api:generate --routePrefix=$1