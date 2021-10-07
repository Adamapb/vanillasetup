#!/bin/bash
sudo -1
#Enter password
apt-get update
apt-get upgrade -y
apt install apache2 -y
apt install mysql-server -y
mysql_secure_installation
echo n
echo 12345
echo y
echo n
echo n
echo y
systemctl enable apache2
systemctl enable mysql
add-apt-repository ppa:ondrej/php -y
apt-get update
apt install php7.3 libapache2-mod-php php7.3-common php7.3-mysql php7.3-cli php7.3-opcache php7.3-gd php7.3-curl php7.3-imap php7.3-mbstring php7.3-soap php7.3-xmlrpc php7.3-xml php7.3-zip -y
cd /var/www/
git clone https://github.com/Adamapb/vanillasetup.git
mv /var/www/vanillasetup /var/www/vanilla
chown -R www-data:www-data /var/www/vanilla
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
systemctl reload apache2


