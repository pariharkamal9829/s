<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>





<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
  </title>
<!-- link of javascript -->
  <link rel="stylesheet" href="../js/index.js">
  <link rel="stylesheet" href="js/index.js">
<!-- link css with html -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="jquery.floating-social-share.css">

<!-- ------------------appply j query for social floating---------- -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="jquery.floating-social-share.js"></script>


<!-- fontawosome ke link hai -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>    

<!-- font css for features catogries design ke liye link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">

<!-- javascript font ke liye link hai icon show hotab hai jo ki <i> me likha jata hai</i> -->
<script src="https://kit.fontawesome.com/9a99e4ad70.js" crossorigin="anonymous"></script>

</head>
<body>
<!-- -----------------------------------razorpay sdk layout   -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<!-- -----------------------------------whatsapp widget   Need help------------------------------------ -->
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
 <div class="elfsight-app-2ef888c9-e97c-4979-b96f-d5601720eaf4"></div>



 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



<!-- announcement bar  shuidh online-->
<header id="block-1482143996282" class="promo-bar promo-bar-1482143996282 align-center size-default placement-top"
data-type="announcement-bar"

data-hide-delay="no-delay"

data-bar-placement="top"
data-show-for="both"
>

  <span class="promo-bar-text">But 2 Get ₹100 off | Free Delivery | COD  </span>

</header>


  <!-- navbar new with drpoup <menu></menu> -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <img  src="image/logo 2.png"class=" logo rounded-1" width="100px" height="100px"  alt="kamal">
        
      <a class="navbar-brand" href="login system php/index.php">Parmar Impex</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
     <li class="nav-item">
                    <a class="nav-link" href="face care.php">FaceCare</a>
      </li>
     <li class="nav-item">
                    <a class="nav-link" href="hair care.php">HairCare</a>
      </li>
     <li class="nav-item">
                    <a class="nav-link" href="organic seeds.php"> OrganicSeeds</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all product.php"> AllProducts</a>     
      </li>
      <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
       </li>
</ul>

<div class="btn-group" role="group" aria-label="Button group with nested dropdown">

  <div class="btn-group" role="group">
    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      login
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="login system php/login.php">login</a></li>
      <li><a class="dropdown-item" href="login system php/register.php">Sign Up</a></li>
      <li><a class="dropdown-item" href="login system php/logout.php">logout</a></li>
    </ul>
  </div>
</div>
 
 
        </div>
    </div>

</nav>
<!-- --------------nav end------------ -->


<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

<a href="razorpay.api/pay.php">
<input type="submit" value="Pay Now"  class="razorpay-payment-button"  >
</a>


  <!-- ---------------------footer bootom--------------- -->

<!-- ------------------features and click links--------------------------- -->
<div class="footer">
  <div class="container">
      <div class="row">
<div class="footer-col-3">
  <h3> Use ful links  </h3> 
  <ul>
      <li>About us</li>
      <li>Delivery Policy</li>
      <li>Returen Policy</li>
      <li> contact us</li>
      <li> Safety Uses</li>
  </ul>
</div>
<div class="footer-col-4">
  <h3>  Features  </h3> 
  <ul class=" features-link">
    <a href="login system php/index.php" style="color: black; "> <li>Home </li> </a>
    <a href="face care.php" style="color: black;"> <li> Face Pack  </li>
      <a href="hair care.php" style="color: black;"> <li> Hair pack </li></a>
      <a href="organic seeds.php" style="color: black;"><li>Organic seeds </li></a>
      <a href="all product.php" style="color: black;"> <li>  All products </li></a>
  </ul>
</div>
</div>
</div>

<!-- social icon hover effect html codes -->
<section  class="social-icon-hover">
 
  <div  class="wrapper" >
    <div class="icon facebook" >
        <div class="tooltip"  >
       Faebook
        </div>
        <span><a href="https://www.facebook.com/people/Kamlesh-Parihar/100082031186818/"><i class="fab fa-facebook"> </i> </a></span>
     </div>
  <div class="icon instagram" >
     <div class="tooltip"  >
        Instagram 
     </div>
     <span><a href="https://www.instagram.com/parmar_impex/"><i class="fab fa-instagram"> </i> </a></span>
  </div>
  <div class="icon Amazon">
     <div class="tooltip">
        Amazon
     </div>
     <span><a href="https://www.amazon.in/s?me=A6712EUQBJRV1&marketplaceID=A21TJRUUN4KGV"> <i class="fa-brands fa-amazon"></i> </a></span>

  </div>
  <div class="icon youtube">
     <div class="tooltip">
        YouTube
     </div>
     <span><a href="https://www.youtube.com/channel/UCMf8T7qa8Q-MMyxfCszxrZg/"> <i class="fab fa-youtube"></i>  </a></span>
  </div>
  <div class="icon meesho-logo">
    <div class="tooltip">
       Meesho
    </div>
    <span><a href="https://www.meesho.com/ParmarImpex50073?_ms=2"> <i class="fa-solid fa-cart-shopping"></i> </a></span>
 </div>
</div>





<!-- -------------------------jquery socical icon floating-------------- -->


<hr>
<p class="copy-right"> Copy right 2022- parmar impex@</p>
</div>
</div>


 
<!-- meesho icon click button float like whatsapp -->
<a href="https://www.meesho.com/ParmarImpex50073?_ms=2" class="material-icon floating-btn" > <img src="image/meesho.png " class="meesho-logo" ></a> 



  <!-- link with j query like bootstarp just above to js tag? -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- ----------------jquery for floating socical icon right side---------------- -->
<script src="/path/to/jquery.min.js"></script>
<script src="/path/to/jquery.floating-share.js"></script>



</body>
</html>

