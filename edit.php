<?php 
 include 'dbc.php';
 $id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query= mysqli_query($connection,"SELECT * FROM 'stock' WHERE 'Invoice No.'='$id[$i]';"); //or die(mysql_error());
	
	while($row = mysqli_fetch_array($query))
	  { ?>
   <form action="savestock.php" method="POST">

    <h2 style="text-align:center;">Add New Item Details:</h2>
<pre><span>Product Name:  </span><input id="name" type="text" name="name" placeholder="Enter Product Name" value="<?php echo $row[0];?>" />                                    Vendor Details:<input id="email" type="text" name="details" placeholder="Enter Vendor Details " value="<?php echo $row[1];?>" /><pre>
<pre><span>Enter the Date:      </span><input id="email" type="date" name="date" placeholder="Enter date" value="<?php echo $row[2];?>" />                              <span>Enter Invoice NO: </span><input id="email" type="text" name="invoice" placeholder="Enter invoice no." value="<?php echo $row[3];?>" /></pre><pre><span>Enter the Quantity :</span><input id="quantity" type="number" name="quantity" placeholder="Enter the quantity" value="<?php echo $row[4];?>"/>                               <span>Enter the Rate:   </span><input id="rate" type="number" name="rate" placeholder="Enter the Rate" value="<?php echo $row[5];?>" /></pre><pre>Upload Bill:<input type="file" name="file"></pre><span>Description of Item:</span><br><textarea id="feedback" name="feedback" placeholder="enter the description of item" value="<?php echo $row[6];?>"></textarea>
 <button type="submit" name="submit" value="Submit">submit</button>
</form>
<?php
}
}
?>