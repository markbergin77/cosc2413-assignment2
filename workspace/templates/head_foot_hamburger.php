<?php
/* This weird string syntax (<<< FOO) is called HEREDOC
 * see http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
 * Apparently it is like a multi-line double quote string
 * In php, variables in double quotes are expanded while variables in single quotes are not
 * $name = 'Jeff';
 * echo "My name is $name" // Should output My name is Jeff
 * echo 'My name is $name' // Should output My name is $name
*/
$meta = <<<HEAD
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
HEAD;

$styles = <<<STYLES
  <link rel="stylesheet" href="css/header_nav_body.css">
  <link rel="stylesheet" href="css/hamburger.css">
  <link rel="stylesheet" href="css/cart.css">
  
STYLES;


$fonts = <<< FONTS
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
FONTS;

$header = '<a href="index.php">Silverado</a>';
$hamburger ='<a id="nav_toggle" href="#"><span></span></a>';
$hamburger_script = '<script src="js/hamburger.js"></script>';

$cart_icon = <<< CART
  <div class="icon_cart">
    <div class="cart_line_1"></div>
    <div class="cart_line_2"></div>
    <div class="cart_line_3"></div>
    <div class="cart_wheel"></div>
  </div>
CART;

$cart_script = '<script src="js/cart.js"></script>';

$menu = <<< MENU
  <ul>
    <li><a href="prices.php">Prices</a></li>
    <li><a href="schedule.php">Schedule</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </ul>
MENU;

$footer = <<< FOOTER
    <div class = "address footer_text">
      123 Fake Street, Fakebourne, FAK 7777
    </div>
    <div class = "student_numbers footer_text">
      s3539565 s3529812
    </div>
FOOTER;
?>