# MobWeb_CustomProductUrlKey extension for Magento

A simple Magento extension that allows to dynamically modify a product's URL key before the product is saved.

Example: If you create a new product with a name of "My Product", the automatically generated URL key for that product would be "my-product". With this extension, you can use another product attribute to create the URL key, for example the product's SKU or its manufacturer.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

## Configuration

No configuration available. To set up your custom URL key generation logic, open the file `app/code/community/MobWeb/CustomProductUrlKey/Model/Product/Attribute/Backend/Urlkey.php` and add your custom logic at line 17. Save your custom URL key value in the`$urlKey`value.

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).