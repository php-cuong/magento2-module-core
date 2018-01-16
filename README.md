# PHPCuong_Core module for Magento 2
PHPCuong Core module for Magento 2. All PHPCuong modules requires this module. http://www.giaphugroup.com

# How to install this module
## Using the composer
Run the following command in Magento 2 root folder
- composer require phpcuong/core
- php bin/magento setup:upgrade
- php bin/magento setup:static-content:deploy
Run compile if your store in Product mode:
- php bin/magento setup:di:compile
