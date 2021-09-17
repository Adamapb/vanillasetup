#!/bin/bash
sudo -1
#Enter password
apt-get update
apt-get upgrade
apt install apache2 -y
apt install mysql-server -y
mysql_secure_installation
0
n
n
n
y
systemctl enable apache2
systemctl enable mysql
add-apt-repository ppa:ondrej/php
apt-get update
apt install php7.3 libapache2-mod-php7.3 php7.3-common php7.3-mysql php7.3-cli php7.3-opcache php7.3-gd php7.3-curl php7.3-cli php7.3-imap php7.3-mbstring php7.3-soap php7.3-xmlrpc php7.3-xml php7.3-zip
wget https://open.vanillaforums.com/get/vanilla-core-3-1.zip
unzip vanilla-core-3-1.zip -d /var/www
rm vanilla-core-3-1.zip
mv /var/www/package /var/www/vanilla
sudo chown -R www-data:www-data /var/www/vanilla
apt install mysqladmin -y

mysql -u root -e "CREATE DATABASE vanilla;"
mysql -u root -e "CREATE USER src1@localhost IDENTIFIED BY 'Password12345!';"
mysql -u root -e "GRANT ALL PRIVILEGES ON vanilla.* TO src1@localhost;"
mysql -u root -e "FLUSH PRIVILEGES;"
cd

cat > /etc/apache2/sites-available/mydomain.conf <<"__EOF__"
<VirtualHost *:80>
     DocumentRoot /var/www/vanilla/
     ServerName reddit.ncrcu

     <Directory /var/www/vanilla/>
          Options FollowSymlinks
          AllowOverride All
          Require all granted
     </Directory>

     ErrorLog /var/log/apache2/vanilla_error.log
     CustomLog /var/log/apache2/vanilla_access.log combined

</VirtualHost>
__EOF__

a2ensite mydomain.conf
sudo systemctl reload apache2


