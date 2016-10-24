<!DOCTYPE html>

<?php 
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
if (!isset($_SESSION['bookings'])) {
    $_SESSION['bookings'] = array();
}
?>

<?php include_once "templates/head_foot_hamburger.php";?>
<?php include_once "templates/ticket.php";?>
<html>
<head>
  <?php 
    header("Access-Control-Allow-Origin: *");
    // createst meta tag of get, using the data.
    echo $meta;
    echo $styles;
    echo $fonts;
  ?>
  
  <!-- Page Specific Styles -->
  <link rel="stylesheet" href="css/card_basic.css">
  <link rel="stylesheet" href="css/btn.css">
  <link rel="stylesheet" href="css/ticket.css">
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
   <header>
    <?php echo $header?>
  </header>
  <!-- Hamburger From: http://codepen.io/elijahmanor/pen/Igpoe -->
  <?php echo $hamburger; echo $cart_icon; ?>
  <nav class = nav>
    <?php echo $menu ?>
  </nav>
  
  <div class="container">
    <div class="card_basic_container">
    <?php
     
      foreach($_SESSION['bookings'] as $arr) {
        if (empty($arr)) {
          break;
        }
        printTicket($arr, $_POST);
      }
    ?>
    </div>
  </div>
  <footer>
    <?php echo $footer; ?>
  </footer>
   <!-- Scripts -->
  <?php 
  echo $hamburger_script;
  echo $cart_script;
   unset($_SESSION['bookings']);
  ?>
  
   <!-- Page Specific Scripts -->

</body>
</html>

