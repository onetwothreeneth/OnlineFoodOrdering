<?php
	include_once("conexao.php");
   
   $id = mysqli_real_escape_string($conn, $_POST['id']);
   $orderid = mysqli_real_escape_string($conn, $_POST['order_id']); 
   $custemail = mysqli_real_escape_string($conn, $_POST['cust_email']);
   $date = mysqli_real_escape_string($conn, $_POST['date']);
   $total = mysqli_real_escape_string($conn, $_POST['total']);
   $status = mysqli_real_escape_string($conn, $_POST['status']);
   echo "$id - order_id - cust_email - date-total - $status ";   
    
    
        $result = mysqli_query($conn, "UPDATE cart_orders SET order_id='$orderid',cust_email='$custemail',date='$date',total='$total',status='$status' WHERE id='$id'");
        
        $resultado_cursos = mysqli_query($conn, $result);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/OnlineFoodOrdering-master/admin/dashboard/'>
				<script type=\"text/javascript\">
					alert(\"Status alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/OnlineFoodOrdering-master/admin/dashboard/'>
				<script type=\"text/javascript\">
					alert(\"Status não foi alterado com Sucesso.\");
				</script>
			";	
			}
		?>
	</body>
</html>
<?php $conn->close(); ?>