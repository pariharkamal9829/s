<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart</title>
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
        
      <a class="navbar-brand" href="home.php">Parmar Impex</a>
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

<!-- ----------------paytm api responsiveness for diffrent devices  -->

<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>

<!--  -->

 <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Products in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                <td><?= $row['product_name'] ?></td>
                <td>
                  <i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                </td>
                <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="home.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
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