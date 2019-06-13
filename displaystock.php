<!doctype html>
<html>
<head>
<style>
.one {
text-align:center;
background: #AA076B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #61045F, #AA076B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #61045F, #AA076B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

background-color:rgb(0,64,64);
height:180px;
width:1360px;
}

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}




@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}


::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
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
 }</style><script>
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();</script>
<div class="one">
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
 
<p> <img class="h" src="logo.png" height=175 width=1000>
</div>

<a href="login.php" style="margin-left:1232px;">Logout</a>
<section>
  <h1>Stock Maintainance</h1>
  <div class="tbl-header">
 <?php
include 'dbc.php';
$query = "SELECT * FROM `stock`";
$result = mysqli_query($connection, $query);
echo '<table cellpadding="0" cellspacing="0" border="0"><tr><th>Product Name</th><th>Vendor Details</th><th>Description</th><th>Date</th><th>Invoice No.</th><th>Quantity</th><th>Rate</th><th>Amount</th></tr>';
while($row = mysqli_fetch_array($result)) {
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td></tr>";
}
?>
</head>
</html>