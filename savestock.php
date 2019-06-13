<?php
include 'dbc.php';
$name= $_POST['name'];
$vndr = $_POST['details'];
$date = $_POST['date'];
$invoice = $_POST['invoice'];
$quantity = $_POST['quantity'];
$rate = $_POST['rate'];
$amount = ($rate*$quantity);
$desc = $_POST['feedback'];
if(!isset($_POST['submit'])){
echo "Please fill out the form";
header('Location: addstock.php');
} 
else {
mysqli_query($connection, "INSERT INTO `stock` 
VALUES ('$name','$vndr','$date','$invoice','$quantity','$rate','$amount','$desc')") 
or die(mysqli_error($connection));
?>
<script>alert('Item Inserted Sucessfully');
window.location.href ="addstock.php";
</script>
<?php
}
?>

