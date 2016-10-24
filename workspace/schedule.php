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
  <link rel="stylesheet" href="css/schedule.css">
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
                <th>Time</th>
                <th>Mon - Tue</th>
                <th>Wed - Fri</th>
                <th>Sat - Sun</th>
              </tr>
              <tr>
                <td>12pm</td>
                <td data-label = "Mon - Tue"></td>
                <td data-label = "Wed - Fri"></td>
                <td data-label = "Sat - Sun">Minions</td>
              </tr>
              <tr>
                <td>1pm</td>
                <td data-label = "Mon - Tue">Minions</td>
                <td data-label = "Wed - Fri">Trainwreck</td>
                <td data-label = "Sat - Sun"></td>
              </tr>
              <tr>
                <td>3pm</td>
                <td data-label = "Mon - Tue"></td>
                <td data-label = "Wed - Fri">Cemetery of Splendor</td>
                <td data-label = "Sat - Sun"></td>
              </tr>
              <tr>
                <td>6pm</td>
                <td data-label = "Mon - Tue">Cemetery of Splendor</td>
                <td data-label = "Wed - Fri">Minions</td>
                <td data-label = "Sat - Sun">Trainwreck</td>
              </tr>
              <tr>
                <td>9pm</td>
                <td data-label = "Mon - Tue">Trainwreck</td>
                <td data-label = "Wed - Fri">Ant Man</td>
                <td data-label = "Sat - Sun">Ant Man</td>
              </tr>
            </table>
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

