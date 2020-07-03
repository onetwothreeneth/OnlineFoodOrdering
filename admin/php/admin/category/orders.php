<?php
/**
* Simple PHP CRUD Script
* Developed by TutorialsClass.com
* URL:  http://tutorialsclass.com/code/php-simple-crud-application
**/

// Create database connection using config file
include_once("conexao.php");

// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM cart_orders ORDER BY id DESC");
?>

<html>
<head>    
    <title>Pedidos</title>
	
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">
<style>
@media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
  }
}

</style>

</head>

<body>


 <label>Pesquisar:</label>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Procurar por pedidos..">
</div>

    <table  id="myTable" width='80%' border=1>

    <tr>
        <th>N? do Pedido</th> <th>Email</th> <th>Data</th> <th>Total</th> <th>Status</th><th>Status</th><th>Detalhes</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {  
    	
        echo "<tr>";
        echo "<td>".$user_data['order_id']."</td>";
        echo "<td>".$user_data['cust_email']."</td>";
        echo "<td>".$user_data['date']."</td>";
        echo "<td>".$user_data['total']."</td>";
        echo "<td>" .$user_data['status']. "</td>";	
        if($user_data['status'] == 1)
							{
			echo "<td><span class='label label-warning' style='width:50px;'>Processando</span></td>";
							}
							if($user_data['status'] == 2)
							{
			echo "<td><span class='label label-success'  style='width:50px;'>Em transito</span></td>";
							}							
							if($user_data['status'] == 3)
							{
			echo "<td><span class='label label-default'  style='width:50px;'>Entregue</span></td>";
							}
							if($user_data['status'] == 4)
							{
			echo "<td><span class='label label-danger'  style='width:50px;'>Cancelado</span></td>"; }
                            if($user_data['status'] == 0)
							{
			echo "<td><span class='label label-info'  style='width:50px;'>Pendente</span></td>"; }					
            echo "<td> <a href='update.php?id=$user_data[id]' data-toggle='modal' data-target='#exampleModalupdate'>Editar</a>  <a href='view_order.php?id=$user_data[id]' data-toggle='modal' data-target='#exampleModal'>Exibir</a>
            <a href='client_dados.php?id=$user_data[id]' data-toggle='modal' data-target='#exampleModal'>Entregar</a>			


</td></tr>";     
        		
    }
    ?>
    </table>
	
	
	
	<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>


<script>
$('a.btn').on('click', function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="yes" allowtransparency="true" src="'+url+'"></iframe>');
});
</script>



<!-- Modal HTML -->
<div id="printThis">
    <div id="exampleModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
           </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
		<button id="btnPrint" type="button" class="btn btn-default">Imprimir</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal HTML -->
<div id="printThis">
    <div id="exampleModalupdate" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
           </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
		<button id="btnPrint" type="button" class="btn btn-default">Imprimir</button>
      </div>
    </div>
  </div>
</div>
</div>




<script>
$(document).on('click', 'a[data-toggle]', function (e) {
    e.preventDefault();

    //carrega URL do link com Ajax
    $("#modal-conteudo").load(this.href);
});
</script>
<script>
document.getElementById("btnPrint").onclick = function () {
    printElement(document.getElementById("printThis"));
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}
</script>	
</body>
</html>
