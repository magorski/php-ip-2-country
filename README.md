# phpIp2Country - PHP geolocalization class with free (updated daily) IPs database

### Example code:
	:::php
<?
require('phpip2country.class.php');
	
$dbConfigArray = array(
	'host' => 'localhost', //example host name
	'port' => 3306, //3306 -default mysql port number
	'dbName' => 'ip_to_country', //example db name
	'dbUserName' => 'ip_to_country', //example user name
	'dbUserPassword' => 'QrDB9Y8CKMdLDH8Q', //example user password
	'tableName' => 'ip_to_country', //example table name
);
	
$phpIp2Country = new phpIp2Country('213.180.138.148',$dbConfigArray);
	
print_r($phpIp2Country->getInfo(IP_INFO));
?>

### Outputs:
	:::php
Array
(
    [IP_FROM] => 3585376256
    [IP_TO] => 3585384447
    [REGISTRY] => RIPE
    [ASSIGNED] => 948758400
    [CTRY] => PL
    [CNTRY] => POL
    [COUNTRY] => POLAND
    [IP_STR] => 213.180.138.148
    [IP_VALUE] => 3585378964
    [IP_FROM_STR] => 127.255.255.255
    [IP_TO_STR] => 127.255.255.255
)
