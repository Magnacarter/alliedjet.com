#!/bin/bash

# Init script for ChurchThemes.net
echo "Commencing alliedjet.com setup"

# Make a database, if we don't already have one
echo "Creating database (if it's not already there)"

mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS alliedjet"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON alliedjet.* TO wp@localhost IDENTIFIED BY 'wp';"

# The Vagrant site setup script will restart Nginx for us

# Let the user know the good news
echo "alliedjet.com now installed";
