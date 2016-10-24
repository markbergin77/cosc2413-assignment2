<!DOCTYPE html>
<?php include "templates/head_foot_hamburger.php";
      include "templates/card.php"; 
      include "php/movieArray.php";
      session_start();
  ?>
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
            <div class = "card_basic_header">Contact Us</div>
            <form method = "post" action ='http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php' class="contact_form">
              <div class = "name_input"> 
                <label for="name" >Name</label><br>
                <input type = "text" name = "name" placeholder = "Name" required>
              </div>
              <br>
              <div class = "email_input"> 
                <label for="email" class = "email_input">Email</label><br>
                <input type = "email" name = "email" placeholder = "email@email.com" required>
              </div>
              <br>
              <div class = "subject_radio">
                  <label for="subject" class = card_contact_text>Subject</label><br>
                  <label for="radio"><input type = "radio" name = "subject" value = "general_enquiry" required>General Enquiry</label><br>
                  <label for="radio"><input type = "radio" name = "subject" value = "group_and_corporate_bookings">Group and Corporate Bookings</label><br>
                  <label for="radio"><input type = "radio" name = "subject" value = "suggestions_and_complaints">Suggestions and Complaints</label><br>
              </div>
              <br>
              <div class = "message_input"> 
                <label for="message" class = card_contact_text>Message</label><br>
                <textarea name = "message" required></textarea>
              </div>
              <br>
              <div class = "button_wrapper">
                  <input class="btn green raised submit" type="submit" value="Submit">
              </div>
            </form>
        </div>
        <!-- Debug 
        <div class="card_basic_body">
          <div class = "card_basic_header">Debug</div>
            <div class = card_basic_text>
              Name: <?php// echo $_POST["name"] ?> <br>
              Email: <?php// echo $_POST["email"] ?> <br>
              Subject: <?php// echo $_POST["subject"] ?> <br>
              Message: <?php// echo $_POST["message"] ?>
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