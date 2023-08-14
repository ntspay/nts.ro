# nts.ro
Work in progress, we will get back on this after we study the license agreements.

# use
```
git clone https://github.com/ntspay/website.git website
```

# nginx rights
## Storage Directories: These directories need to be writable by the web server for caching, logging, and temporary files.
```
sudo chmod -R 775 /var/www/website/storage
sudo chown -R www-data:www-data /var/www/website/storage
```
## Public Directory: The public directory is where your application's public assets are located. It should be readable by everyone.
```
sudo chmod -R 755 /var/www/website/public
```
## PHP Files: PHP files need to be readable by the web server but not writable.
```
sudo chmod 644 /var/www/website/*.php
```
## Read-Only for Web Server: The vendor directory should be readable by the web server user (e.g., www-data for Apache). It should not be writable by the web server user. This helps prevent accidental modifications or security vulnerabilities.
```
sudo chmod -R 755 /var/www/website/vendor
sudo chown -R www-data:www-data /var/www/website/vendor
```
