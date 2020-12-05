<?php 
$connect = new PDO("mysql:host=localhost;dbname=loginsystem", "root", "");
$message = '';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Bird Food Store</title>
		
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<style>
		ul {
  list-style-type: none;
  margin:0;
  padding:0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #4CAF50;
}
.reg {
  max-width: 500px;
  margin: auto;
}
ul.header{
	background-color:powderblue;
	text-decoration:none;
	color:dark;
	border-bottom:3px solid #e8491d;
}
.button_1{
  height:38px;
	background:#e8491d;
	border:1px solid powderblue;
	padding-left:30px;
	padding-right:20px;
	color:white;
}
ul.footer{
	
background-color:	#F0E68C;
  color:black;
	
}


		
	</style>
	<!--start-->
	</head>
	<body>
	<header >
		 <h1 class="reg"style="margin-top:15px;"><a href="index.php"style="text-align:center;" ><img src="img/logo.png" style="width:42px;height:55px;border:0;margin-top:4px;">Home Repair</a></h1>
	 
</header>
<header >
<ul >

<a href="https://www.aav.org/page/basiccare"><img src="img/blog.png" style="width:42px;height:38px;border:0"></a>
<a href="https://www.facebook.com"><img src="img/fb.png" style="width:42px;height:38px;border:0"></a>
<a href="https://www.twitter.com"><img src="img/twitter.png" style="width:42px;height:38px;border:0"></a>
<a href="https://www.youtube.com"><img src="img/yt.png" style="width:42px;height:38px;border:0"></a>
<button type="submit" class="button_1"style="float:left;"><a href="adminpanel.php" style="color:white">Admin Panel</a></button>

<button type="submit" class="button_1"style="float:right;"><a href="logout.php" style="color:white">Log out</a></button> 
<button type="submit" class="button_1"style="float:right;;"><a href="login.php" style="color:white">Log In</a></button>
<button type="submit" class="button_1"style="float:right;"><a href="myprofile.php" style="color:white">My Account</a></button>
</ul>

</header>
	<!--last-->
<header>
   
      
		  
		    
		    <ul class="header">
		    <li class="current"><a href="index.php">Home</a></li>
		   <li><a href="PlumbingService.php">Plumbing Service</a></li>
           <li><a href="ElectricalService.php">Electrical Service</a></li>
           <li> <a href="HomeRenovationService.php">Home Renovation Service</a></li>
           <li><a href="ApplianceRepairService.php">Appliance Repair Service</a></li>
           <li><a href="Sale.php">Sale</a></li>
		   </ul>
		   
		
	  
	 
     
</header>
<section class="container">
 <form action="details.php" method="post">
 
<button type="submit"name="submit"value="search" class="button_1"style="float:right;width:30%;margin-top:20px;">Search</button>
<input type="text" name="search"id="search" placeholder="search..."style="margin-top:20px;height:36px;width:69.90%;">


</form>
<div class="col-md-5"style="posistion:relative;margin:0;">
<div class="list-group" id="show-list">


</div>
</div>
</section>

			
		<br />
		<div class="container">
			<br />
			<h3 align="center">Plumbing Services</h3><br />
			<br /><br />
			<?php
			$query = "SELECT * FROM tbl_seedmixes ORDER BY id ASC";
			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			
			foreach($result as $row)
			{
			?>
			<div class="col-md-3">
				<form method="post">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;height:500px;" align="center">
						<img src="img/plumbingservice/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
					</div>
				</form>
			</div>
			
			<?php
			}
			?>
			<!--orderdetails part-->
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
			<?php $message = '';echo $message; ?>
			<div align="right">
				<a href="SeedMixes.php?action=clear"><b>Clear Cart</b></a>
			</div>
			<table class="table table-bordered">
				<tr>
					<th width="40%">Item Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
			<?php
			if(isset($_COOKIE["shopping_cart"]))
			{
				$total = 0;
				$cookie_data = stripslashes($_COOKIE['shopping_cart']);
				$cart_data = json_decode($cookie_data, true);
				foreach($cart_data as $keys => $values)
				{
			?>
				<tr>
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td>$ <?php echo $values["item_price"]; ?></td>
					<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
					<td><a href="SeedMixes.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
				</tr>
			<?php	
					$total = $total + ($values["item_quantity"] * $values["item_price"]);
				}
			?>
				<tr>
					<td colspan="3" align="right">Total</td>
					<td align="right">$ <?php echo number_format($total, 2); ?></td>
					<td></td>
				</tr>
			<?php
			}
			else
			{
				echo '
				<tr>
					<td colspan="5" align="center">No Item in Cart</td>
				</tr>
				';
			}
			?>
			</table>
			</div>
			<button class="button_1" type="button"style="float:right;" ><a href="cart.php"style="color:white">Basket</a></button>
		</div>
		
		<hr>
<!--Footer part-->
<footer class="">

      
      <div style="text-align:center;float:left; margin:20px;padding:30px;">
	  <h3>Customer Service</h3>
	  <ul class="footer">
	  <p><a href="delivery.php">Delivery</a></p>
	  <p><a href="returns.php">Returns</a></p>
	  <p><a href="secureShopping.php">Secure Shopping</a></p>
	  <p><a href="faqs.php">FAQ's</a></p>
	  </ul>
      </div>
      
      
      <div class="footer"style="text-align:center;float:left; margin:20px;padding:30px">
	  <h3>Company Information</h3>
	  <ul class="footer">
	  <p><a href="aboutus.php">About Us</a></p>
	  <p><a href="contactus.php">Contact Us</a></p>
	  <p><a href="termsandconditions.php">Terms & Conditions</a></p>
	  <p><a href="cookie.php">Cookie Policy</a></p>
	  </ul>
      
      </div>
      
     
	  <div class="footer"style="text-align:center;float:left; margin:20px;padding:30px;">
	 <h3>Contact Information</h3>
	 <ul class="footer">
	  <p><li>Freephone: 01913483542</li></p>
	  <p><li>Lines open: Mon-Fri: 9am - 5pm</li></p>
	  <p><li>help@birdsfood.co.bd</li></p>
	  <p><li>ww.birdsfood.co.bd</li></p>
	  <p><li>Find us on Facebook</li></p>
	  </ul>
     
      </div>
	   <div class="footer"style="text-align:center;float:left; margin:20px;padding:30px;">
	 
	  </div>

</footer>
   <!--ajax for search-->
  
	</body>
</html>