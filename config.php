<?
$dbmsHost='localhost';
$dbmsId='root';
$dbmsPw='apmsetup';
$dbName='blog';

$link=mysqli_connect($dbmsHost,
$dbmsId, $dbmsPw, $dbName) or die();

mysqli_query($link, "SET NAMES utf8;");

function getRows($sql){
	global $link;
	$rows=array();

	$result=mysqli_query($link,$sql);

	if($result===true){
		return null;
	}

	while($row=mysqli_fetch_assoc($result) )
	{
		$rows[]=$row;
	}
	
	return $rows;
}

function execute($sql){
	getRows($sql);
}
?>
