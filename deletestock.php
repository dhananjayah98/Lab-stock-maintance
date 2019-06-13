<?php
include 'dbc.php';
if(isset($_POST['delete'])){	
$value=$_POST['delete'];

$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($connection,"DELETE FROM `stock` WHERE `Invoice No.`='$id[$i]';");
	
}
}	
if(isset($result)){?><script> window.location.href="updatestock.php";</script>
<?php
}
?>