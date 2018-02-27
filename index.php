<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>JOBSEKern </title>

  <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>
<?PHP
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'paul';
//$sql=mysqli_connect($dbhost,$dbuser,$dbpass);
//mysql_select_db('FTC');
//$sql1 = 'SELECT password,membership FROM login';
//$retval = mysql_query( $sql1);
//$row = mysql_fetch_array($retval,MYSQL_ASSOC);
$row ="louis";
function generator(){
	 exec('cd plugin
../gradlew clean composerinstall',$out11,$err11);
 exec('cd plugin
../gradlew clean uploadArchives',$out1,$err1);

    exec('cd plugin
../gradlew clean test ',$out,$err);
	echo "hello";
    echo $out; 
    echo $err;
	  echo $out1; 
	  echo $out11; 
    echo $err11;
    echo $err1;
}

if(isset($_REQUEST['submit']))
{generator();
	if($row['password']==$_REQUEST['name'])
	{
	header("Location:index2.php");
	}
}
?>

  <div class="wrap">
		<div class="avatar">
      <img src="http://cdn.ialireza.me/avatar.png">
		</div>
       <form id="form1" name="form1" method="post" action="index.php">
		<input name="username" type="text" placeholder="username" required>
		<div class="bar">
			<i></i>
		</div>
		<input name= "name" type="password" placeholder="password" required>
		<a href="" class="forgot_link">forgot ?</a>
        <input name='submit' type="submit" class="avatar" id="submit" value="Sub" />
		
    </form>
	</div>

  <script src="js/index.js"></script>

</body>

</html>