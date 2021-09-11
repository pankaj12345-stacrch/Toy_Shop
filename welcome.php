<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Welcome to Toy shop!</title>
  </head>
  <body>
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
  <!-- <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>
 -->
 <section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="topnav">
  		<a style="color:purple;" class="active" href="#home">        Home                     </a>
		</div> 
  		<div class="collapse navbar-collapse" id="navbarNav">
  		
    		<ul class="navbar-nav ml-auto">
    		 
    		 <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#featured-categories">Products</a>
      		</li>
      		
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#about">About Us</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#services">Our Services</a>
      		</li>
      		
      		<!-- <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#team" tabindex="-1" aria-disabled="true">Our Team</a>
      		</li> -->
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#contact">Contact</a>
      		</li>
			  <!-- <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="register.php">Register</a>
      		</li> -->
			  <!-- <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="login.php">Login</a>
      		</li> -->
			  <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="cart.html">Cart</a>
			
      		</li>
      		
			  <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="logout.php">Logout</a>
      		</li>
      		
      		
    		</ul>
  		

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4"> 
<!-- <h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3> -->
<!-- <hr>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> 




<!DOCTYPE html>
<html>
<head>
<title> Toy shop</title>
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<meta http-equip="X-UA-compatible" content="ie=edge">
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>

<!-- <section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="topnav">
  		<a style="color:purple;" class="active" href="#home">Home</a>
		</div> 
  		<div class="collapse navbar-collapse" id="navbarNav">
  		
    		<ul class="navbar-nav ml-auto">
    		 
    		 <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#featured-categories">Products</a>
      		</li>
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="cart.html">Cart</a>
			
      		</li>
      		
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#about">About Us</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#services">Our Services</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#team" tabindex="-1" aria-disabled="true">Our Team</a>
      		</li>
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#contact">Contact</a>
      		</li>
			  <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="register.php">Register</a>
      		</li>
			  <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="login.php">Login</a>
      		</li>
			  <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="logout.php">Logout</a>
      		</li>
      		
      		
    		</ul>
  		</div>
		</nav> -->


	<div class="slider">
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="image/toy15.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="image/toy19.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
    </div>
    <div class="carousel-item" >
      <img src="image/toy18.jpg" class="d-block w-100" alt="..." style="width:auto;height:800px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
		




	<!------Featured Categories----->
	<section class="featured-categories">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<img src="image/p1.jpg">
				</div>
				<div class="col-md-3">
				<img src="image/p2.jpg">
				</div>
				<div class="col-md-3">
				<img src="image/p3.jpg">
				</div>
				<div class="col-md-3">
				<img src="image/p4.jpeg">
				</div>
				
			
			</div>
		
		</div>
	</section>
	
	
<section class="new-arrivals">
<div id="site">
	<div class="container">
		<div class="title-box">
		<h2>New Arrivals</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="image/p5.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Power ranger</h3>
			<div class="product-description" data-name="Power ranger" data-price="10">
				
				<p class="product-price">&euro; 10</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="image/p6.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Avenger Set</h3>
			<div class="product-description" data-name="Avenger Set" data-price="15">
				
				<p class="product-price">&euro; 15</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="image/p7.jpeg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Doraemon Set</h3>
			<div class="product-description" data-name=Doraemon Set" data-price="14">
				
				<p class="product-price">&euro; 14</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="image/p8.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Shinchan doll</h3>
			<div class="product-description" data-name="Shinchan doll" data-price="30">
				
				<p class="product-price">&euro; 30</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>



	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="image/car.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Car set</h3>
			<div class="product-description" data-name="Car set" data-price="31">
				
				<p class="product-price">&euro; 31</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="image/p10.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Hellicopter</h3>
			<div class="product-description" data-name="Hellicopter" data-price="30">
				
				<p class="product-price">&euro; 30</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="image/p11.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Barbie Set</h3>
			<div class="product-description" data-name="Barbie Set" data-price="16">
				
				<p class="product-price">&euro; 16</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="image/p12.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Kid Codding</h3>
			<div class="product-description" data-name="Kid-Codding" data-price="40">
				
				<p class="product-price">&euro; 40</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>	
		</div>






	</div>
</div>
</section>
	
	
<section class="on-sale">
<div id="site">
	<div class="container">
		<div class="title-box">
		<h2>On Sale</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="image/p13.jpeg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Puzzle</h3>
			<div class="product-description" data-name="Puzzle" data-price="12">
				
				<p class="product-price">&euro; 12</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="image/p14.jpeg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Carrom board</h3>
			
			<div class="product-description" data-name="Carrom board" data-price="34">
				
				<p class="product-price">&euro; 34</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="image/toy2.jfif">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Robot</h3>
			<div class="product-description" data-name="Robot" data-price="20">
				
				<p class="product-price">&euro; 20</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			



			<div class="col-md-3">
			<div class="product-top">
				<img src="image/toy3.jfif">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Ponny doll</h3>
			<div class="product-description" data-name="Ponny doll" data-price="60">
				
				<p class="product-price">&euro; 60</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>



	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="image/toy5.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Iron-man</h3>
			<div class="product-description" data-name="Iron-man" data-price="17">
				
				<p class="product-price">&euro; 17</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="image/toy6.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Car</h3>
			<div class="product-description" data-name="Car" data-price="28">
				
				<p class="product-price">&euro; 28</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="image/toy8.webp">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Mini-Robot</h3>
			<div class="product-description" data-name="Mini-Robot" data-price="21">
				
				<p class="product-price">&euro; 21</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="image/toy1.jpeg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Jumboo</h3>
			
			<div class="product-description" data-name="Jumboo" data-price="25">
				
				<p class="product-price">&euro; 25</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>	
		</div>






		
	</div>
</div>
</section>
	
	

	
	










<!------About Section------->	
	<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h2>About Us</h2>
				<div class="about-content">
				Welcome to Sports Toy shop, your number one source for all things. We're dedicated to giving you the very best of services, with a focus on dependability, customer service and uniqueness.

Founded in 2018 by Daniel Brown, Toy shop has come a long way from its beginnings in a Copenhagen. When Daniel Brown first started out, his passion for helping other parents be more eco-friendly, providing the best equipment for his fellow sports lover drove him to do intense research, quit his day job, and gave him the impetus to turn hard work and inspiration into to a booming online store. We now serve customers all over the US, the world, the Austin area, and are thrilled to be a part of the quirky, eco-friendly, fair trade wing of the sports industry.

We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.


				</div>
			<button type="button" class="btn btn-primary">Read More>>
			
			</button>
			
			</div>
			<div class="col-md-6 skills-bar">
			<p>Delivery Rate</p>
			<div class="progress">
			<div class="progress-bar" style="width:85%;">85%</div>
			</div>
			
			<p>Customer Growth</p>
			<div class="progress">
			<div class="progress-bar" style="width:75%;">75%</div>
			</div>
			
			<p>Happy Employee</p>
			<div class="progress">
			<div class="progress-bar" style="width:90%;">90%</div>
			</div>
			
			</div>
		</div>
		
	</div>	
		
<!------Services Section------->		
	<section id="services">
	
		<div class="container">
			<h1>Our Services</h1>
			<div class="row services" >
				<div class= "col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-phone"></i>
					</div>
					<h3> 24/7 Support</h3>
					<p>on order related queries</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-shopping-cart"></i>
					</div>
					<h3> Return within 3 days</h3>
					<p>of receiving your order</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-truck"></i>
					</div>
					<h3>Get free delivery</h3>
					<p>on orders above 29Euro</p>
				</div>
			</div>
		</div>
	
	</section>
	


<!-----Team------->
<!-- <section id="team">
	
	<div class="container">
		<h1>Our Team</h1>
		<div class="row">
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQFAGRcm8xf54vh79rStYKeJjjU9DyIahhg_lISffKgXG2H8jeX&usqp=CAU" class="img-responsive">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>Pankaj jha</h2>
				<h3>Founder/CEO</h3>
				
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ6unES-zKuWBrqH8V0eLPzUpn6cLvX-yxgrA68xxz4BIWNR7ai&usqp=CAU" class="img-responsive">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>Pankaj jha </h2>
				<h3>Software Engineer</h3>
				
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSAUp3H4k41jEd_xhqwVvL3Mne0sU5tbFC0TXYUplXI29Cm9Xrp&usqp=CAU" class="img-responsive">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>Rani shelke </h2>
				<h3>Sales Manager</h3>
				
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQO8y-nOmAu8jfeyaIbWi3FL9ojdEf28f6st5uDgQmD7JfHLvfN&usqp=CAU" class="img-responsive">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>Kanak uke</h2>
				<h3>Project Manager</h3>
				
			</div>
		</div>	
	</div>
	
</section> -->

<!------COntact------------>	
<section id="contact">	
	
	<div class="container">
		<h1>Get In Touch</h1>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Your Name..">
				</div>
				<div class="form-group">
				<input type="number" class="form-control" placeholder="Phone no.">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email..">
				</div>
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Message.."></textarea>
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-md-6 contact-info">
				<div class="follow"><b><i class="fa fa-map-marker"></i>  </b>Vartak Road,Killa bunder vasai(w)</div>
				<div class="follow"><b><i class="fa fa-mobile"></i>  </b>(+91)9665917252</div>
				<div class="follow"><b><i class="fa fa-envelope"></i>  </b>toyshop@gmail.com</div>
				
				
				<div class="follow"><label><b>Get Social </b></label>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a>
				
				</div>
			</div>
			
		</div>

	</div>

</section>

</body>
</html>	

