<?Php
session_start();
$search_query = '';
if(isset($_GET["query"])){
  $search_query = $_GET["query"];
}

$page_no = 1;
if(isset($_GET["pageno"])){
  $page_no = $_GET["pageno"];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pharmacy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">

	
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1">
              <form action="shop.php" class="site-block-top-search">
                <input type="text" name="query" class="form-control border-0" placeholder="Search" value="<?php echo $search_query;?>">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">MediTechBD</a>
              </div>
            </div>

            <div class="text-right col-6 col-md-4 order-3 order-md-3">
              <div class="site-top-icons">
                <ul>
                  <li><a href="signup.php"><span class="icon glyphicon glyphicon-user"></span></a></li>
                  <li><a href="cart.php" class="site-cart"><span class="icon glyphicon glyphicon-shopping-cart"></span>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
                    </a>
                  </li> 
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="gellary.php">Doctors</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="site-blocks-cover" style="background-image: url(images/index.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h1 class="mb-2">Purchase Prescription Drugs Online</h1>
              <p class="mb-4">MediTechBD is completely committed to providing quality when it comes to your prescription medications. </p>
              <p>
                <a href="shop.php" class="btn btn-sm btn-primary">Shop Now</a>
              </p>
          </div>
        </div>
      </div>
    </div>
	
	
	
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-3">
            <h2>Learn More About Our Pharmacists</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7">
            <img src="images/panadol.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-5 justify-content-center">
            <p>MediTechBD pharmacists are unique because they understand the importance of personalized care. On top of receiving a comprehensive education needed to meet state licensing requirements, all our pharmacists are professionally certified to provide immunizations. What sets our pharmacists apart from the rest are their daily interactions with you, our customers. Because at MediTechBD, we care.</p>
            <p><a href="about.php" class="btn btn-primary btn-sm">Know more</a></p>
          </div>
        </div>
      </div>
    </div>
	
	<section class="features-icons">
		<div class="container">
		  <div class="row">
			<div class="col-lg-6">
			  <div class="features-icons-item mx-auto mb-5">
				<div class="features-icons-icon d-flex">
				  <i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3>Free Shipping</h3>
				<p>MediTechBD Offers Free Shipping with No Minimum</p>
			  </div>
			</div>
			<div class="col-lg-6">
			  <div class="features-icons-item mx-auto mb-5">
				<div class="features-icons-icon d-flex">
				  <i class="fa fa-address-book"></i>
				</div>
				<h3>Customer Support</h3>
				<p>Get answers from a pharmacist now. Contact us on +880 111 222 3333.
					We’re committed to offering you, our customers, personalized online pharmacy care and resources, whenever and wherever you need it..</p>
			  </div>
			</div>
		  </div>
		</div>
	</section>

    <footer class="footer">	
          <div class="col-md-12 text-center">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            </p>
          </div>
    </footer>
  </div>
    
	
	<script src="js/bootstrap.min.js"></script> 
	<script src="js/index.js"></script>
	
  </body>
</html>