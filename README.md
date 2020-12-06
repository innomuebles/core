A custom module for [dev.innomuebles.com/magentonew](https://dev.innomuebles.com/magentonew) (Magento 2)..  

## How to install
``` 
COMPOSER=php -d memory_limit=-1 /opt/cpanel/composer/bin/composer            
bin/magento maintenance:enable
rm -rf composer.lock
composer clear-cache
$COMPOSER require innomuebles/core:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/*
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f
bin/magento maintenance:disable
```

## How to upgrade
```      
COMPOSER=php -d memory_limit=-1 /opt/cpanel/composer/bin/composer        
bin/magento maintenance:enable
$COMPOSER remove coyoteaccessories/core
rm -rf composer.lock
$COMPOSER clear-cache
$COMPOSER require innomuebles/core:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/*
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f
bin/magento maintenance:disable 
```