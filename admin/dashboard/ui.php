<!Doctype html>
<html>
	<head>
		<title>Conchos Sisig</title>
		<link rel="icon" href="img/logo.png">

		<!-- CUSTOM JS/CSS -->
		<link rel="stylesheet" type="text/css" href="../css/admin.css">

		<!-- FLAT UI JS/CSS -->
		<link rel="stylesheet" type="text/css" href="../Ui/dist/css/flat-ui.css">
		<link rel="stylesheet" type="text/css" href="../Ui/dist/css/flat-ui.min.css">
		<link rel="stylesheet" type="text/css" href="../Ui/dist/css/flat-ui.css.map">
		<link rel="stylesheet" type="text/css" href="../Ui/dist/css/vendor/bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="../Ui/dist/js/flat-ui.js"></script>

		<!-- Font awesome -->
		<link rel="stylesheet" type="text/css" href="../fonts/css/font-awesome.css">


		<!-- Animate -->
		<link rel="stylesheet" type="text/css" href="../css/animate.css">

		<!-- JQUERY -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/dashboard.js"></script>
		<script type="text/javascript" src="../js/drop.js"></script>
	</head>

	<body>

		<!-- Start of Container -->
		<div class="container">
		<!-- Start of header-->
        <div class="header">
                        <div class="left">
                            <i class="fa fa-spoon"></i><i class="fa fa-spoon"></i> Concho's Sisig
                        </div>
                        <div class="left2">
                            <i id="burgermenu" class="fa fa-bars" alt="1"></i>
                        </div>
                        <div class="right">
                            <div class="box">
                                Welcome Admin <i class="fa fa-gear"></i>
                            </div>
                        </div>
                        <div class="right2">
                            <div class="box">
                                <i class="fa fa-gear"></i>
                            </div>
                        </div>
        </div>
    	<!-- End of header-->
    	<!-- Start of sidebar-->
    	<div class="sidebar">
    		<div class="menu">
    			<div class="icon">
    				<i class="fa fa-bell"></i>
    			</div>
    			<div class="name">
    				Notifications <kbd style="background-color:#e74c3c;">31</kbd>
    			</div>
    		</div>
    		<div class="menu">
    			<div class="icon active">
    				<i class="fa fa-spoon"></i>
    			</div>
    			<div class="name active2">
    				Products
    			</div>
    		</div>
    		<div class="menu">
    			<div class="icon">
    				<i class="fa fa-cloud"></i>
    			</div>
    			<div class="name">
    				Orders <kbd style="background-color:#e74c3c;">6</kbd>
    			</div>
    		</div>
    		<div class="menu">
    			<div class="icon active">
    				<i class="fa fa-bar-chart"></i>
    			</div>
    			<div class="name active2">
    				Sales Report
    			</div>
    		</div>
    		<div class="menu">
    			<div class="icon">
    				<i class="fa fa-envelope"></i>
    			</div>
    			<div class="name">
    				Messages <kbd style="background-color:#e74c3c;">12</kbd>
    			</div>
    		</div>
    		<div class="menu">
    			<div class="icon">
    				<i class="fa fa-users"></i>
    			</div>
    			<div class="name">
    				Accounts <kbd style="background-color:#e74c3c;">3</kbd>
    			</div>
    		</div>
    	</div>
        <!-- End of sidebar-->
    	<!-- Start of Content-->
    	<div class="content">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Notification</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12/27/16 9:45am</td>
                    <td>Kennneth abenojar</td>
                    <td>Registered an new account</td>
                    <td><button id="remove" alt=""><i class="fa fa-remove"></i></button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12/27/16 9:45am</td>
                    <td>Kennneth abenojar</td>
                    <td>Registered an new account</td>
                    <td><button id="remove" alt=""><i class="fa fa-remove"></i></button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12/27/16 9:45am</td>
                    <td>Kennneth abenojar</td>
                    <td>Registered an new account</td>
                    <td><button id="remove" alt=""><i class="fa fa-remove"></i></button></td>
                </tr>
            </table>

            <div class="product-container">
                <div class="item">
                    <img src="http://etatravelandtours.com/wp-content/uploads/2015/05/sisig.jpg" width="10%;">
                    <p class="name">Sisig <kbd style="background-color:#e74c3c;">P12</kbd></p>
                    <p class="desc">Hello po Kung WEB Programmers talaga kayo bigay niyo nga sa akin yung mga link Ng Website niyo</p>
                    <center>
                        <button class="update" id="update-prod">Update</button>
                        <button class="not">Unable</button>
                        <button class="delete">Delete</button>
                    </center>
                </div>
		                <div class="item">
		                    <img src="http://etatravelandtours.com/wp-content/uploads/2015/05/sisig.jpg" width="10%;">
		                    <p class="name">Sisig <kbd style="background-color:#e74c3c;">P12</kbd></p>
		                    <p class="desc">Hello po Kung WEB Programmers talaga kayo bigay niyo nga sa akin yung mga link Ng Website niyo</p>
		                    <center>
		                        <button class="update" id="update-prod">Update</button>
		                        <button class="not">Unable</button>
		                        <button class="delete">Delete</button>
		                    </center>
		                </div>
				                <div class="item">
				                    <img src="http://etatravelandtours.com/wp-content/uploads/2015/05/sisig.jpg" width="10%;">
				                    <p class="name">Sisig <kbd style="background-color:#e74c3c;">P12</kbd></p>
				                    <p class="desc">Hello po Kung WEB Programmers talaga kayo bigay niyo nga sa akin yung mga link Ng Website niyo</p>
				                    <center>
				                        <button class="update" id="update-prod">Update</button>
				                        <button class="not">Unable</button>
				                        <button class="delete">Delete</button>
				                    </center>
				                </div>
						                <div class="item">
						                    <img src="http://etatravelandtours.com/wp-content/uploads/2015/05/sisig.jpg" width="10%;">
						                    <p class="name">Sisig <kbd style="background-color:#e74c3c;">P12</kbd></p>
						                    <p class="desc">Hello po Kung WEB Programmers talaga kayo bigay niyo nga sa akin yung mga link Ng Website niyo</p>
						                    <center>
						                        <button class="update" id="update-prod">Update</button>
						                        <button class="not">Unable</button>
						                        <button class="delete">Delete</button>
						                    </center>
						                </div>
            </div>

						<button id="add">Add product</button>


						<div class="message-box">
								<div class="message-bar">
									  <p class="name"><i class="fa fa-user"></i> Kenneth abenojar</p>
										<p class="email">alakneth@gmail.com</p>
										<p class="message">Hello po Kung WEB Programmers talaga kayo bigay niyo nga sa akin yung mga link Ng Website niyo</p>
									  <p class="date">12/24/16 4:21pm</p>
								</div>
								<div class="remove-msg">
										<i class="fa fa-remove" onclick="$(this).parent().parent().fadeOut();"></i>
								</div>
						</div>
						<div class="message-box">
								<div class="message-bar">
										<p class="name"><i class="fa fa-user"></i> Kenneth abenojar</p>
										<p class="email">alakneth@gmail.com</p>
										<p class="message">Hello po Kung WEB Programmers talaga kayo bigay niyo nga sa akin yung mga link Ng Website niyo</p>
										<p class="date">12/24/16 4:21pm</p>
								</div>
								<div class="remove-msg">
										<i class="fa fa-remove" onclick="$(this).parent().parent().fadeOut();"></i>
								</div>
						</div>
						<div class="message-box">
								<div class="message-bar">
										<p class="name"><i class="fa fa-user"></i> Kenneth abenojar</p>
										<p class="email">alakneth@gmail.com</p>
										<p class="message">Hello po Kung WEB Programmers talaga kayo bigay niyo nga sa akin yung mga link Ng Website niyo</p>
										<p class="date">12/24/16 4:21pm</p>
								</div>
								<div class="remove-msg">
										<i class="fa fa-remove" onclick="$(this).parent().parent().fadeOut();"></i>
								</div>
						</div>



						<div class="notif-bar">
								<p class="name"><i class="fa fa-bell"></i> Kenneth Abenojar</p>
								<p class="time">4:34pm 12/24/16</p>
								<p class="notifs">Registered for new account.</p>
						</div>
						<div class="notif-bar">
								<p class="name"><i class="fa fa-bell"></i> Kenneth Abenojar</p>
								<p class="time">4:34pm 12/24/16</p>
								<p class="notifs">Registered for new account.</p>
						</div>
						<div class="notif-bar">
								<p class="name"><i class="fa fa-bell"></i> Kenneth Abenojar</p>
								<p class="time">4:34pm 12/24/16</p>
								<p class="notifs">Registered for new account.</p>
						</div>


    	</div>
        <!-- End of Content-->






        <!-- Start of footer-->
        <div class="footer">
            Copyright &copy 2016 - Concho's Sisis Admin Dashboard
        </div>
        <!-- End of footer-->



    		<!-- Start of header-->
        <!-- End of header-->
		</div>
		<!-- End of Container -->
	</body>
</html>


<!-- Start of add product-->
<div class="add_products animated bounce">
		<div class="header-title">
			 <h4> <i class="fa fa-plus"></i> Add Product</h4>
			 <span><i class="fa fa-remove"></i></span>
		</div>
		<div class="img-cont">
				<img src="../img/bg.gif" alt="Upload Image" />
				<input type="file" name="image" value="" id="add_image">
		</div>
		<div class="form-cont">
				<input type="text" name="name" placeholder="Name">
				<input type="number" name="price" placeholder="Price">
				<select name="">
						<option value="Sisig">Sisig</option>
						<option value="Main Meals">Main Meals</option>
						<option value="For Kids">For Kids</option>
						<option value="Desserts">Desserts</option>
						<option value="Drinks">Drinks</option>
						<option value="Extras">Extras</option>
				</select>
				<textarea name="description" rows="8" placeholder="Description" resizable></textarea>
				<button>Submit</button>
		</div>
</div>
<!-- End of add product-->


<!-- Start of update product-->
<div class="add_products2 animated bounce" id="update-cont">
		<div class="header-title">
			 <h4> <i class="fa fa-plus"></i> Update Product</h4>
			 <span><i class="fa fa-remove"></i></span>
		</div>
		<div class="img-cont">
				<img src="../img/bg.gif" alt="Upload Image" />
				<input type="file" name="image" value="" id="add_image">
		</div>
		<div class="form-cont">
				<input type="text" name="name" placeholder="Name">
				<input type="number" name="price" placeholder="Price">
				<select name="">
						<option value="Sisig">Sisig</option>
						<option value="Main Meals">Main Meals</option>
						<option value="For Kids">For Kids</option>
						<option value="Desserts">Desserts</option>
						<option value="Drinks">Drinks</option>
						<option value="Extras">Extras</option>
				</select>
				<textarea name="description" rows="8" placeholder="Description" resizable></textarea>
				<button>Submit</button>
		</div>
</div>
<!-- End of update product-->

					<!-- Start of PopUp-->
					<div class="popup animated bounceIn">
							<span>Delete ? </span>
							<hr>
							<button class="ok">Ok</button>
							<button class="cancel">Cancel</button>
					</div>
					<!-- End of PopUp-->




<!--

this might help

        <kbd style="background-color:red;">1</kbd>


-->
