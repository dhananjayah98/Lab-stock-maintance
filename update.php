<html>
<head>

<style>
.one {
text-align:center;
background: #0f0c29;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

height:150px;
width:1350px;
}
.four {
background: #c94b4b;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4b134f, #c94b4b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
 height:650px;
 width:1350px;

}
form {
  background-color:black;
  margin: auto;
  position: relative;
  width: 1000px;
  height: 400px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
  font-style: italic;
  line-height: 24px;
  font-weight: bold;
  color: #09C;
  text-decoration: none;
  border-radius: 10px;
  padding: 10px;
  border: 1px solid #999;
  border: inset 1px solid #333;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input {
	width:200px;
}
textarea#feedback {
  width: 1000px;
  height: 100px;
}
input.button:hover {
  background: #fff;
  color: #09C;
}
button {
  width: 100px;
  position: absolute;
  right: 20px;
  bottom: 20px;
  background: #09C;
  color: black;
  font-family: Tahoma, Geneva, sans-serif;
  height: 30px;
  border-radius: 15px;
  border: 1p solid #999;
}
a:active,a:hover {
background-color: lightblue;
color:blue;
text-decoration:underline;
}
 a:link,a:visited {
background: #cc2b5e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #753a88, #cc2b5e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #753a88, #cc2b5e);
    color: yellow;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}
</style>
</head>
<body>


<div class="one">
<p> <img class="h" src="logo.png" height=135 width=1000>
 </div>
 <div class="four">
 <a href="loginstock.php" style="margin-left:10px">BACK</a>
<a href="login.php" style="margin-left:1200px">Logout</a>

 <h3 style="text-align:center;">LAB STOCK MAINTAINANCE SYSTEM</h3>
<?php 
 include 'dbc.php';
 if(isset($_POST['edit'])){
 $id=$_POST['selector'];
$row1=mysqli_query($connection,"SELECT * FROM add_product WHERE pr_id='$id'");?>
   <form action="savestock1.php" method="POST">

    <h2 style="text-align:center;">Add New Item Details:</h2>
<pre><span>Product Name:  </span><input id="name" type="text" name="name"  value="<?php echo $row1[0];?>" />                                    Vendor Details:<input id="email" type="text" name="details"  value="<?php echo $row1[1];?>" /><pre>
<pre><span>Enter the Date:      </span><input id="email" type="date" name="date"  value="<?php echo $row1[2];?>" />                              <span>Enter Invoice NO: </span><input id="email" type="text" name="invoice"  value="<?php echo $row1[3];?>" /></pre><pre><span>Enter the Quantity :</span><input id="quantity" type="number" name="quantity"  value="<?php echo $row1[4];?>"/>                               <span>Enter the Rate:   </span><input id="rate" type="number" name="rate"  value="<?php echo $row1[5];?>" /></pre><pre>Upload Bill:<input type="file" name="file"></pre><span>Description of Item:</span><br><textarea id="feedback" name="feedback"  value="<?php echo $row1[6];?>"></textarea>
 <button type="submit" name="submit" ="Submit">submit</button></form><?php
	}
 ?>
