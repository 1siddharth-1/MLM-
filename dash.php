<?php
include("config.php");

$sql="SELECT count(id) AS total from user_login";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `physicalprogress`< 100";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows1=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `physicalprogress`= 100";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows2=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows3=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT sum(villages) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows4=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT sum(projectcost) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows5=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT sum(projectpopulation) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows6=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT sum(fhtc) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows12=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT sum(noofhousehold) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows13=$values['total'];
?>


<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`= 'NABARD' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows7=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`='NDB' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows8=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`='STATE HEAD' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows9=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`='MINING AREA SES' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows10=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total FROM addinfo WHERE `funding_agency`='DISTRICT MINING' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows11=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT sum(noofhousehold) AND sum(fhtc) AS total FROM addinfo";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);

?>
