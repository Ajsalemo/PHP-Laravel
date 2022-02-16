#!/bin/bash
########################################
# This is only used for App Services with PHP 8.x 
# Since Laravel serves out of its public folder we need to change the root to reflect this
# Otherwise we get a 403 forbidden
#######################################
echo "Copying custom default.conf over to /etc/nginx/sites-enabled/default.conf"

NGINX_CONF=/home/default.conf

if [ -f "$NGINX_CONF" ]; then
    cp /home/default.conf /etc/nginx/sites-enabled/default
    service nginx reload
else
    echo "File does not exist, skipping cp."
fi

# Enter the source directory to make sure the script runs where the user expects
cd /home/site/wwwroot
export NGINX_PORT=8080

if [  -n "$PHP_ORIGIN" ] && [ "$PHP_ORIGIN" = "php-fpm" ]; then
   export NGINX_DOCUMENT_ROOT='/home/site/wwwroot'
   service nginx reload
else
   export APACHE_DOCUMENT_ROOT='/home/site/wwwroot'
fi