# PHP URL Project
In this project ypu can get url parameter

# License 
this project has MIT LICENSE

# Created By 
Mohammad Mohammad Soltani

# How To Install ?
You can download this pakage from Composer with this command

```bash
composer require mohammad-mohammad-soltani/php-url
```

# How to use ?
You can use this class with this code

```php
<?php
require "vendor/autoload.php";
use MohammadMohammadSoltani\PhpUrl\phpURL;
$url = new phpURL(true); // -> true for error reporting
?>
```

# Methods :

## -> Check Url 
You can check url structure with this code :

```php
<?php
require "vendor/autoload.php";
use MohammadMohammadSoltani\PhpUrl\phpURL;
$url = new phpURL(true);

print_r($url -> check_url("localhost:8080" , true)); //true for check protecol
?>
```

## -> Get Protecol
You can get url protecol with this code 
```php
<?php
require "vendor/autoload.php";
use MohammadMohammadSoltani\PhpUrl\phpURL;
$url = new phpURL(true);

print_r($url -> get_protecol("http://localhost:8080"));
?>
```

## -> Get Domain Extension
You can get domain extention (.com , .net , .ir or ... ) with this code 
```php
<?php
require "vendor/autoload.php";
use MohammadMohammadSoltani\PhpUrl\phpURL;
$url = new phpURL(true);

print_r($url -> get_domain_extension("http://test.ir"));
?>
``` 

## -> Get Port
You can get port with this code 
```php
<?php
require "vendor/autoload.php";
use MohammadMohammadSoltani\PhpUrl\phpURL;
$url = new phpURL(true);

print_r($url -> get_port("http://test.ir"));
//OR
print_r($url -> get_port("test.ir:8080"));
```

## -> Url Path Array
You can get url path array with this code 
```php
<?php
require "vendor/autoload.php";
use MohammadMohammadSoltani\PhpUrl\phpURL;
$url = new phpURL(true);

print_r($url -> url_path_array("test.ir:8080/dashboard/home/get_money"));
/*
Array
(
    [0] => dashboard
    [1] => home
    [2] => get_money
)
*/
?>
```

## -> Get Query
You Can Get GET Request Query with this code 
```php
<?php
require "vendor/autoload.php";
use MohammadMohammadSoltani\PhpUrl\phpURL;
$url = new phpURL(true);

print_r($url -> get_query("test.ir:8080?name=mohammad&family=mohammad_soltani&location=isahan"));
/*
Array
(
    [0] => Array
        (
            [0] => name
            [1] => mohammad
        )

    [1] => Array
        (
            [0] => family
            [1] => mohammad_soltani
        )

    [2] => Array
        (
            [0] => location
            [1] => isahan
        )

)
*/
?>
```