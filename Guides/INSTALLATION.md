# Magento 2 JivoChat Module Install Guide

**Using Composer:**
1. You will need to have an active [JivoChat account](bit.ly/2gmEB0m) to setup the plugin.
1. Go to your Magento 2 root folder
1. Type the follosing command to install the plugin `composer require sozodesign/magento2-jivochat`
1. Enable the module `php -f bin/magento module:enable --clear-static-content Sozodesign_JivoChat`
1. Database updates `php -f bin/magento setup:upgrade` 
1. Configure the module in the Magento 2 Admin. Go to Stores -> Configuration -> SOZO Extensions -> JivoChat

