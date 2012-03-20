<?php
if(empty($_POST['ip'])){
	$_POST['ip'] = $_SERVER['REMOTE_ADDR'];
}
?>
<form action="" method="POST">
<input type="text" name="ip" value="<?=$_POST['ip']?>" /><input type="submit" name="submit" value="check country">
</form>
<?
if(!empty($_POST['ip'])){
	require('./phpip2country.class.php');
	
	/**
	 * Newest data (SQL) avaliable on project website
	 * @link http://code.google.com/p/php-ip-2-country/ 
	 */
	$dbConfigArray = array(
		'host' => 'localhost', //example host name
		'port' => 3306, //3306 -default mysql port number
		'dbName' => 'ip_to_country', //example db name
		'dbUserName' => 'ip_to_country', //example user name
		'dbUserPassword' => 'QrDB9Y8CKMdLDH8Q', //example user password
		'tableName' => 'ip_to_country', //example table name
	);
	
	$phpIp2Country = new phpIp2Country($_POST['ip'],$dbConfigArray);
	
	echo '<b>IP: </b>' . $phpIp2Country->getInfo(IP_STR);
	echo '<br>';
	echo '<b>IP numerical Value: </b>' . $phpIp2Country->getInfo(IP_VALUE);
	echo '<br>';
	echo '<b>IP registry: </b>' . $phpIp2Country->getInfo(IP_REGISTRY);
	echo '<br>';
	echo '<b>IP assigned (Y-m-d H:i:s): </b>' . date('Y-m-d H:i:s',$phpIp2Country->getInfo(IP_ASSIGNED_UNIXTIME));
	echo '<br>';
	echo '<b>IP country RIR (Regional Internet Registry) representation: </b>' .$phpIp2Country->getInfo(IP_COUNTRY_ISO);
	echo '<br>';
	echo '<b>IP Country Abbreviation: </b>' . $phpIp2Country->getInfo(IP_COUNTRY_CODE);
	echo '<br>';
	echo '<b>IP country name: </b>' . $phpIp2Country->getInfo(IP_COUNTRY_NAME);
	echo '<br>';
	echo '<b>IP range: </b>' . nl2br(var_export($phpIp2Country->getInfo(IP_RANGE),true));
	echo '<br>';
	echo '<b>IP range numerical: </b>' . nl2br(var_export($phpIp2Country->getInfo(IP_RANGE_NUMERICAL),true));
	echo '<br>';
	echo '<b>full IP informations array: </b>' . nl2br(var_export($phpIp2Country->getInfo(IP_INFO),true));
}
?>






