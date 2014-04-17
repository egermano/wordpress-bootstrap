#!/usr/bin/env bash

# ############## #
# Update the box #
# ############## #
# Downloads the package lists from the repositories
# and "updates" them to get information on the newest
# versions of packages and their dependencies
apt-get update

# Install Tools
apt-get install -y vim curl git-core

# Set up the database
export DEBIAN_FRONTEND=noninteractive
apt-get -q -y install mysql-server-5.5

# Install WP
apt-get -y install apache2 

# Install PHP
apt-get install -y libapache2-mod-php5
# Add add-apt-repository binary
apt-get install -y python-software-properties
# Install PHP 5.4
add-apt-repository ppa:ondrej/php5
apt-get update
apt-get install -y php5-cli php5-mysql php5-curl php5-mcrypt

cd /temp
wget http://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz -C /var/www/wordpress

echo "CREATE DATABASE IF NOT EXISTS wordpress" | mysql -uroot
echo "CREATE USER wordpress@'localhost' IDENTIFIED BY ''" | mysql -uroot
echo "GRANT ALL PRIVILEGES ON wordpress.* TO wordpress@'localhost' IDENTIFIED BY ''" | mysql -uroot

mv /var/www/wordpress/wp-config.php /var/www/wordpress/wp-config-old.php 
cp /vagrant/wp-config-base.php /var/www/wordpress/wp-config.php 

sudo ln -s /vagrant/app/ /var/www/wordpress/wp-content/themes/app
sudo ln -s /vagrant/dist/ /var/www/wordpress/wp-content/themes/dist

service apache2 restart
