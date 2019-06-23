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

 # If JDK or JRE enviornment is not installed
  ### To fix this error, uninstall any previous JDK you have installed or anything else and download `JAVA SE Development Kit 8` from [here](https://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html) and make sure you have added it in your `PATH` variable.