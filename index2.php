<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'paul';
$sql=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('FTC');
$sql1 = 'SELECT password,membership FROM login';
$retval = mysql_query( $sql1);
$row = mysql_fetch_array($retval,MYSQL_ASSOC);

if(isset($_REQUEST['submit']))
{
	if($row['password']==$_REQUEST['name'])
	{
		echo "logineed sussefully";
	}
}
?>
<form id="form1" name="form1" method="post" action="index2.php">
  
  <input type="text" name="name" id="name" />
  <input type="submit" name='submit' id="submit" value="Sub" />
</form>
</body>
</html>