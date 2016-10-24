<!DOCTYPE html>
 <?php
    header("Access-Control-Allow-Origin: *");
     session_start();
     ?>
     
<?php include_once "templates/head_foot_hamburger.php";?>
<head>
  <?php 
    echo $meta;
    echo $styles;
    echo $fonts;
  ?>
  <!-- Page Specific Styles -->
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="css/btn.css">
  <link rel="stylesheet" href="css/index.css">
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
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
    <div class="card_container">
      <!-- card -->
      <div class="card news">
        <div class = "card_header">
            <div class = "header_title">News</div>
        </div>
        <div class="card_text">
          <p>Welcome Silverado customers to our brand new opening!</p>
          <p>Over the renovation period here at silverado, we have implemented new seats, 3d Projection technologies and an Dolby Sound System all contributing to amazing quality!</p>
          <p>Come down to your local faithful cinema and bring some of your friends too for a great entertainment experience.</p>
          <p>Our Re-opening means a re-imagining of our appreciation for good cinema. So if you bring five kids along to see the hit new move Minions, we'll throw in some Minions memerobelia for the little guys from the little yellow guys.</p>      
          <p>TAP ON A MOVIE TO START PLANNING YOUR ENTERTAINMENT EXPERIENCE!</p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <?php echo $footer; ?>
  </footer>
  <?php 
  echo $hamburger_script;
  echo $cart_script
  ?>
  <!-- Page Specific Scripts -->
  <script src="js/card.js"></script>
</body>
</html>