<?php
include "dbconn.php";

  echo "<table class='animated fadeInDown'>
		    <tr>  
		        <th>Name</th>
		        <th>Email</th>
			    <th>Contact</th> 
			    <th>Address</th> 
			    <th>Message</th> 
		    </tr>";

  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn,$sql);
	  while($row = mysqli_fetch_array($result)){
	  		$id = $row['id']; 
	  		$name = $row['name']; 
	  		$email = $row['email']; 
	  		$contact = $row['contact']; 
	  		$address = $row['address']; 

	  				  echo "<tr> 
			                    <td>$name</td>
			                    <td>$email</td> 
			                    <td>$contact</td>
			                    <td>$address</td>
			                    <!--<td><button style='background-color:#2c3e50; border-radius:0px'>Message</button></td>-->
			                    <td><textarea rows='5' style='border:none; outline:none; padding:1%; font-size:0.8vw; width:95%;' placeholder='Message User' id='jasgdfaklshfbioasfnaksldbgahoisfohbaskglahsjasdgkjhasfasbgvjasgbvajkvasgjashasnjvkagvhancvabshkfvgasbjfbashvjkashbvjkascbahsjkgvbasjkvgbasjkvbasjbnkjSiugcrugmqughucghugiwhaumrheamieaupoiupioeqtumwctnvmcdsvfgnuahxmihnxebfxesrcdtfvgbyuhnbygvtcrdtfvygbuhniijmnuhgbyfvtdcrxcrfvtgbhnjmhbgvfcdfvgbhnjmnhbgvfgbhnjmmjnhbgvftcvgbhnjmk'></textarea>
			                    <button style='background-color:#2c3e50; float:left; margin-left:2.5%; border-radius:0px;' id='hadfcvgahgadfasdfadfcvgahgadfasdfadfcvgahgadfasdf' alt='$email'>Message</button></td>
			                </tr>";
 
	 
	  } 
			echo "</table>";  
 ?> 

 <script type="text/javascript">
$('tr #hadfcvgahgadfasdfadfcvgahgadfasdfadfcvgahgadfasdf').click(function(){
	var email = $(this).attr('alt'); 
	var msg = $(this).siblings('#jasgdfaklshfbioasfnaksldbgahoisfohbaskglahsjasdgkjhasfasbgvjasgbvajkvasgjashasnjvkagvhancvabshkfvgasbjfbashvjkashbvjkascbahsjkgvbasjkvgbasjkvbasjbnkjSiugcrugmqughucghugiwhaumrheamieaupoiupioeqtumwctnvmcdsvfgnuahxmihnxebfxesrcdtfvgbyuhnbygvtcrdtfvygbuhniijmnuhgbyfvtdcrxcrfvtgbhnjmhbgvfcdfvgbhnjmnhbgvfgbhnjmmjnhbgvftcvgbhnjmk').val(); 
	$.post('msg.php',{email:email , msg: msg },function(data){
		alert(data);
	});
});
 </script>