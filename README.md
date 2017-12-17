# Magento 2 rest api sdk | In heavy development

 A proper sdk for Magento 2 rest api

WARNING
===============

This piece of software is provided without warranty of any kind, use it at your own risk.

REQUIREMENTS
===============

*php-curl* needs to be installed.

USAGE
===============

**Installation**

Best way is to use composer
```
    $ composer require webweave/magento2-sdk
```

**Basic Code examples**

```PHP
<?php

use WebWeave\Magento2SDK\ApiClient;
use WebWeave\Magento2SDK\CustomerGroups;

//Initialize client
$apiClient = new ApiClient('https://magento2.shop/', 'AdminUserName', "AdminPassword");

//Get and set Bearer token in the client
$apiClient->getToken();

//Create a customer group
$customerGroup = new CustomerGroups($apiClient);

$data = array("group" => array(
	"code" => "I am made by the magento2-sdk :D"
));

$customerGroup->createCustomerGroup($data);
```