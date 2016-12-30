<?php
include "dbconn.php";

  echo "<table class='animated fadeInDown'>
		    <tr> 
		        <th>Id</th>
		        <th>Date</th>
		        <th>Email</th>
			    <th>Total</th> 
		    </tr>";

  $sql = "SELECT * FROM cart_orders where status='3'";
  $result = mysqli_query($conn,$sql);
	  while($row = mysqli_fetch_array($result)){
	  		$id = $row['id'];
	  		$order_id = $row['order_id'];
	  		$cust_email = $row['cust_email'];
	  		$date = $row['date'];
	  		$total = $row['total'];
	  		$status = $row['status'];

	  				  echo "<tr> 
			                    <td>$id</td>
			                    <td>$date</td> 
			                    <td>$cust_email</td>
			                    <td>$total</td>
			                </tr>";

			@$sales+= @str_replace("P","",$total);     
	 
	  }  
			echo "</table>"; 
		echo "<span style='margin-right:0.5%; font-size:1vw; float:right;'><br><b>Total Sales</b> <kbd>P".$sales."</kbd></span>";
 ?> 