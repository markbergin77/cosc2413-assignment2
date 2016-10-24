<!DOCTYPE html>
<?php include_once "templates/head_foot_hamburger.php";
 session_start();
  ?>
  
<html>
<head>
  <?php 
    header("Access-Control-Allow-Origin: *");
    echo "<meta name='GET' data-movie={$_GET["movie"]}>";
    echo $meta;
    echo $styles;
    echo $fonts;
  ?>
  <!-- Page Specific Styles -->
  <link rel="stylesheet" href="css/header_nav_body.css">
  <link rel="stylesheet" href="css/hamburger.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/card_basic.css">
  <link rel="stylesheet" href="css/prices.css">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400' rel='stylesheet' type='text/css'>
 
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
            <table class = "table_prices">
              <tr class="card_basic_header">
                <th>Item</th>
                <th> Mon - Tue <br> Mon - Fri (1pm)</th>
                <th> Wed - Fri (not 1pm) <br> Sat - Sun</th>
              </tr>
              <tr>
                <td>Standard-Full</td>
                <td data-label = "Mon - Tue, Mon - Fri (1pm)">$12</td>
                <td data-label = "Wed - Fri (not 1pm) Sat - Sun">$18</td>
              </tr>
              <tr>
                <td>Standard-Conc</td>
                <td data-label = "Mon - Tue, Mon - Fri (1pm)">$10</td>
                <td data-label = "Wed - Fri (not 1pm), Sat - Sun">$15</td>
              </tr>
              <tr>
                <td>Standard-Child</td>
                <td data-label = "Mon - Tue, Mon - Fri (1pm)">$8</td>
                <td data-label = "Wed - Fri (not 1pm), Sat - Sun">$12</td>
              </tr>
              <tr>
                <td>FirstClass-Adult</td>
                <td data-label = "Mon - Tue, Mon - Fri (1pm)">$25</td>
                <td data-label = "Wed - Fri (not 1pm), Sat - Sun">$30</td>
              </tr>
              <tr>
                <td>FirstClass-Child</td>
                <td data-label = "Mon - Tue, Mon - Fri (1pm)">$20</td>
                <td data-label = "Wed - Fri (not 1pm), Sat - Sun">$25</td>
              </tr>
              <tr>
                <td>Beanbag*</td>
                <td data-label = "Mon - Tue, Mon - Fri (1pm)">$20</td>
                <td data-label = "Wed - Fri (not 1pm), Sat - Sun">$30</td>
              </tr>
            </table>
            <div class="card_basic_text"> *Beanbag price allows up to 2 adults OR 1 adult + 1 child OR up to 3 children. One price fits all! </div>
        </div>
    </div>
<footer>
    <?php echo $footer; ?>
  </footer>
  <?php 
  echo $hamburger_script;
  echo $cart_script
  ?>
  
</body>
</html>

