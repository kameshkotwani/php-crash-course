# This repo contains basics of PHP
---
# Steps to deal with common Errors

# If the localhost is not responding or taking way to long at phpmyadmin

+ ##  go to `xampp-control.exe`
+ ## in the `Apache` Module click on `Config`
+ ## Select `Apache` (httpd.conf) 
+ ## Go to line 60 where there is `Listen 12.34.56.78:80` 
+ ## Add another line `Listen 127.0.0.1:8080`

# Restart the Apache Module  and re-run `localhost:8080/dashboard`

# To run phpMyAdmin
 ### In brower run `localhost:8080/phpmyadmin`