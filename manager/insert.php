
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Client Register </title>

</head>  

<html lang="en">
  <head>
    <title>SE Liquor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="/labs/lab1/SE PROJECT/manager/Reg.css">
	
  </head>
  <style>
  .button {
  background-color: #FC2138;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {border-radius: 50%;}
body {
	
  background-image: url('try4.jpg');
}

  </style>
  <body>
	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567  </a> 
							<a href="hometest.php"><span class="fa fa-paper-plane mr-1"></span> SE.Liquor@email.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end" >
						<div class="social-media mr-4">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
		        <div class="reg">
		        	<p class="mb-0"><a href="/labs/lab1/SE PROJECT/manager/loginManager.php">Log In</a></p>
		        </div>
					</div>
				</div>
			</div>
		</div>
    
    
	  <nav class="navbar navbar-expand-lg  ftco_navbar  ftco-navbar-light" id="ftco-navbar" style="background-color:black">
	   
	    

	      <div class="collapse navbar-collapse" id="ftco-nav" style="background-color:black">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/labs/lab1/SE PROJECT/manager/homeSE.php" class="nav-link">Home</a></li>
	         
	          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="/labs/lab1/SE PROJECT/manager/manProduct.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="/labs/lab1/SE PROJECT/manager/manProduct.php">Products</a>
             <!--   <a class="dropdown-item" href="/labs/lab1/project2/works/cart.php">Cart</a>
                <a class="dropdown-item" href="/labs/lab1/project2/works/checkoutest.php">Checkout</a>-->
              </div>
            </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  </br></br>
  <div class="header">
	<h2>For Insert!</h2>
</div>

	<form method="post" action="">
	
	<div class="input-group">
		<label>Drink Name:</label>
		<input type="text" name="drink_name"  required>
	</div>
	<div class="input-group">
		<label>Drink stock</label>
		<input type="text" name="Drink_stock" required>
	</div>
	<div class="input-group">
		<label>Percent %</label>
		<input type="text" name="Percent" required>
	</div>
	<div class="input-group">
		<label>Price</label>
		<input type="text" name="Price" required>
	</div>
	<div class="input-group">
		<label>Category</label>

			  <select name="Category" >
				<option value="Beer">Beer</option>
				<option value="Vodka">Vodka</option>
				<option value="Liqueur">Liqueur</option>
				<option value="Whiskey">Whiskey</option>
			  </select>
			 
	</div>
	
		<label>Drink Image</label>
		<input type="file" name="Drink_Image" required>
	
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Submit</button>
	</div>

</form> 
</body>   
</html>
<?php
	$con=mysqli_connect("localhost","root","ester12sharon34","phpProject");	
if(isset($_POST['Drink_Image'])){
	if(preg_match('/[0-9]/', $_POST['Drink_stock'])&& preg_match('/[0-9]/', $_POST['Percent'])&&preg_match('/[0-9]/', $_POST['Price'])){
		$result = mysqli_query($con,"INSERT INTO drink(manager_id,drink_name,drink_stock,percent_alcohol,price,Category,Drink_Img) values(1,'".$_POST['drink_name']."','".$_POST['Drink_stock']."','".$_POST['Percent']."','".$_POST['Price']."','".$_POST['Category']."','images/".$_POST['Drink_Image']."')");
		if($result){
			echo "'<script>alert('proudct add sucssefully')</script>'";
		}
	}else
		echo "'<script>alert('please insert a number ')</script>'";

}
	





?>