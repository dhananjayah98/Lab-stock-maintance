<!doctype html>
<html>
<head>
<style>
.one {

background: #AA076B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #61045F, #AA076B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #61045F, #AA076B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

height:180px;
width:1400px;
}

.four {

background: #00d2ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


float:left;
 height:450px;
 width:1400px;
 text-align:center;
 }
button {
 background: #cc2b5e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #753a88, #cc2b5e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #753a88, #cc2b5e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
form {
	float:left;	
	margin-left:40px;
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
a:active,a:hover {
background-color: lightblue;
color:blue;
text-decoration:underline;
}
</style> </head>
 <body style="font-family: 'Lobster', sans-serif;">
 <div class="one">
<p style="text-align:center;"> <img class="h" src="logo.png" height=160></p>

 </div>
 <div style="font-family: 'Lobster', sans-serif;" class="four">
   <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
 <a href="login.php" style="margin-left:1200px">Logout</a>
 <h1>Lab Stock Maintainance System</h1>
 <h2>Welcome</H2>
 Ledger Name:ABCDEF
 <h2> Click Here to</h2>
 <pre><form action="addstock.php" ><button type="submit" name="add" value="add item" style="font-size:30px; text-align:left; font-family: 'Lobster', sans-serif;">Add Item</button></form><form action="updatestock.php"><button type="submit" name=add" value="add item" style="font-size:30px; text-align:left; background-color:#008CBA; font-family: 'Lobster', sans-serif; margin-left:350px;">Delete Item</button></form><form action="addstock.php" ><button type="submit" name="add" value="add item" style="font-size:30px; text-align:left; font-family: 'Lobster', sans-serif; margin-left:300px;">Edit item</button></form><form action="displaystock.php" ><button type="submit" name="add" value="add item" style="font-size:30px; text-align:left; background-color:#f44336; font-family: 'Lobster', sans-serif; margin-left:580px;margin-top:20px;">Display</button></form></pre>
 </div>