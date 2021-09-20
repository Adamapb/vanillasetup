#!/bin/bash

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