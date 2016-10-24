<!DOCTYPE html>
<?php include_once "templates/head_foot_hamburger.php";
session_start();
?>

<head>
    <?php 
    echo $meta;
    echo $styles;
    echo $fonts;
  ?>
  <!-- Page Specific Styles -->
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/card_basic.css">
  <link rel="stylesheet" href="css/btn.css">
</head>

<body>
  <header>
    <?php echo $header ?>
  </header>
  <!-- Hamburger From: http://codepen.io/elijahmanor/pen/Igpoe -->
  <?php echo $hamburger; echo $cart_icon; ?>
  <nav class = nav>
    <?php echo $menu ?>
  </nav>
    <div class="container">
        <div class="card_basic_body">
            <div class = "card_basic_header">Customer Details</div>
            <form method = "post" action ='ticket.php' class="contact_form">
              <div class = "name_input"> 
                <label for="name" >Name</label><br>
                <input type = "text" name = "name" placeholder = "Name" pattern="^[A-z]{1,30}( [A-z])?'?[A-z]{0,30}" required>
              </div>
              <br>
              <div class = "mobile_input"> 
                <label for="mobile" >Mobile Number</label><br>
                <input type = "text" name = "mobile" placeholder = "04XXXXXXXX" pattern="^(\(?0 *4 *\)?|\+ *6 *1 *4 *)([0-9] *){8}$" required>
              </div>
              <br>
              <div class = "email_input"> 
                <label for="email" class = "email_input">Email</label><br>
                <input type = "email" name = "email" placeholder = "email@email.com" required>
              </div>
              <br>
              <div class = "button_wrapper">
                  <input class="btn green raised submit" type="submit" value="Submit">
              </div>
              <?php
                $voucher = $_POST["voucher"];
                $valid = 0;
                if(validate($voucher)) {
                  $valid = 1;
                }
                
                
                function checkStrToInt($checkStr) {
                return ord($checkStr) - ord("A");
              }
              
              function checksum($d) {
                return ((($d[0] * $d[1] + $d[2]) * $d[3] + $d[4]) % 26);
              }
              
              function validate($checksum) {
                // Check format again just to be sure
                // This ensures it works with all examples
                $pattern = '/^\d{5}-\d{5}-[A-Z]{2}$/';
                if(!preg_match($pattern, $checksum)) {
                  return false;
                }
                $array = (explode("-", $checksum));
                $sum1 = checksum($array[0]);
                $sum2 = checksum($array[1]);
                $check1 = checkStrToInt($array[2][0]);
                $check2 = checkStrToInt($array[2][1]);
                
                if($sum1 == $check1 && $sum2 == $check2) {
                  return true;
                } 
                else {
                  return false;
                }
              }
              ?>
              <?php
              echo "<input type='hidden' id='voucher' name='voucher' value = $valid>  </input>"
              ?>
            </form>
        </div>
        <!-- Debug 
        <div class="card_basic_body">
          <div class = "card_basic_header">Debug</div>
            <div class = card_basic_text>
              Name: <?php// echo $_POST["name"] ?> <br>
              Mobile: <?php// echo $_POST["mobile"] ?> <br>
              Email: <?php// echo $_POST["email"] ?>
            </div>
        </div>
        <!-- /Debug -->
    </div>
  <footer>
    <?php echo $footer; ?>
  </footer>
  <?php 
  echo $hamburger_script;
  echo $cart_script
  ?>
  <!-- Page Specific Scripts -->
</body>
</html>