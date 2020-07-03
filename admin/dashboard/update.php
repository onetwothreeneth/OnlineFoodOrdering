<?php
// include database connection file
include_once("dbconn.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$orderid=$_POST['order_id'];
	$custemail=$_POST['cust_email'];
	$date=$_POST['date'];
	$total=$_POST['total'];
	$status=$_POST['status'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE cart_orders SET order_id='$orderid',cust_email='$custemail',date='$date',total='$total',status='$status' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: http://localhost/OnlineFoodOrdering-master/admin/dashboard/");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM cart_orders WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$orderid = $user_data['order_id'];
	$custemail = $user_data['cust_email'];
	$date = $user_data['date'];
	$total = $user_data['total'];
	$status = $user_data['status'];
}
?>
<html>
<head>	
	<title>Editar</title>
	


<body>
<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Editar Status</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="/accounts/login/"></a></div>
            </div>  
            <div class="panel-body" >
	
	<br/><br/>
	 
	<form name="update_user" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>Order id</td>
				<td><input type="text" name="order_id" value=<?php echo $orderid;?>></td>
			</tr>
			<tr> 
				<td>Cust email</td>
				<td><input type="text" name="cust_email" value=<?php echo $custemail;?>></td>
			</tr>
			<tr> 
				<td>date</td>
				<td><input type="date" name="date" value=<?php echo $date;?>></td>
			</tr>
			<tr> 
				<td>Total</td>
				<td><input type="text" name="total" value=<?php echo $total;?>></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td>
		 <select name="status" class="form-control" name="status"  value="">

      <option value="0">Pendente</option>

      <option value="1">Processando</option>
	  <option value="2">Em transito</option>

      <option value="3">Entregue</option>
	  <option value="4">Cancelado</option>

      </select></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="atualizar"></td>
			</tr>
		</table>
	</form>
	
	        </div>
        </div>
    </div> 
</div>
    





</div>    
</body>
</html>

