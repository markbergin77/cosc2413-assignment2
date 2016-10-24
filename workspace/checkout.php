<!DOCTYPE html>


  <?php include_once "templates/head_foot_hamburger.php";
 session_start();
  ?>
<html>
<head>
  <?php 
    header("Access-Control-Allow-Origin: *");
    // echo "<meta name='GET' data-movie={$_GET["movie"]}>";
    echo $meta;
    echo $styles;
    echo $fonts;
  ?>
  <!-- Page Specific Styles -->
  <link rel="stylesheet" href="css/card_basic.css">
  <link rel="stylesheet" href="css/btn.css">
  <link rel="stylesheet" href="css/video.css">
  <link rel="stylesheet" href="css/checkout.css">
  <!-- JQuery -->
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
 <script src ="js/checkout.js"></script>
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
  </br>
  
   <?php
//Deletes a ticket from the session array.
if(isset($_GET['arrayIndex']))
{
        if(isset($_SESSION['bookings']))
        {
        array_splice($_SESSION['bookings'], $_GET['arrayIndex'], $_GET['arrayIndex']);
        }
}

?>
  
  
 <?php 
 if (!empty($_POST)) {
    array_push($_SESSION['bookings'],$_POST);
    unset($_POST);
    } 
    
    $totalTickets = (count($_SESSION['bookings']));
 $ticketNumber = 0;
 
  // Prints each ticket in the array.
if(!empty($_SESSION))
{
  foreach($_SESSION['bookings'] as $arr) {
     if (!empty($arr)) {
   echo "<div class = \"card_basic_header\" id=\"sessionDetails$ticketNumber\"> <span> $arr[movie] --- $arr[day]  $arr[time] </span> </div>";
   echo "<table id=\"TICKET\"> ";
   echo "<tbody>";
    if ($arr['SA'] > 0){
      echo "<tr>";
        echo "<td>Adult</td>";
        echo "<td data-label=\"Qty\"><input type=\"number\" name=\"SA\" class=\"\" id=\"adultNumber$ticketNumber\" onchange= \"updateTotalPrice($ticketNumber);totalTicketCost($totalTickets);\" value = $arr[SA]> </td>";
        echo "<td data-label=\"Total\"><div id=\"totalAdult$ticketNumber\"> <span>\$0.00</span> </div></td>";
      echo "</tr>";
   }
    if ($arr['SP'] > 0){
      echo "<tr>";
        echo "<td>Concession</td>";
        echo "<td data-label=\"Qty\"><input type=\"number\" name=\"SP\" class=\"\" id=\"concNumber$ticketNumber\" onchange= \"updateTotalPrice($ticketNumber);totalTicketCost($totalTickets);\" value = $arr[SP]> </td>";
        echo "<td data-label=\"Total\"><div id=\"totalConc$ticketNumber\"> <span>\$0.00</span> </div></td>";
      echo "</tr>";
   }
   
      if ($arr['SC'] > 0){
      echo "<tr>";
        echo "<td>Child</td>";
        echo "<td data-label=\"Qty\"><input type=\"number\" name=\"SC\" class=\"\" id=\"childNumber$ticketNumber\" onchange= \"updateTotalPrice($ticketNumber);totalTicketCost($totalTickets);\" value = $arr[SC]> </td>";
        echo "<td data-label=\"Total\"><div id=\"totalChild$ticketNumber\"> <span>\$0.00</span> </div></td>";
      echo "</tr>";
   }
   
      if ($arr['FA'] > 0){
      echo "<tr>";
        echo "<td>First class Adult</td>";
        echo "<td data-label=\"Qty\"><input type=\"number\" name=\"FA\" class=\"\" id=\"firstAdultNumber$ticketNumber\" onchange= \"updateTotalPrice($ticketNumber);totalTicketCost($totalTickets);\" value = $arr[FA]> </td>";
        echo "<td data-label=\"Total\"><div id=\"totalFirstAdult$ticketNumber\"> <span>\$0.00</span> </div></td>";
      echo "</tr>";
   }
   
      if ($arr['FC'] > 0){
      echo "<tr>";
        echo "<td>First class child</td>";
        echo "<td data-label=\"Qty\"><input type=\"number\" name=\"FC\" class=\"\" id=\"firstChildNumber$ticketNumber\" onchange= \"updateTotalPrice($ticketNumber);totalTicketCost($totalTickets);\" value = $arr[FC]> </td>";
        echo "<td data-label=\"Total\"><div id=\"totalFirstChild$ticketNumber\"> <span>\$0.00</span> </div></td>";
      echo "</tr>";
   }
   
      if ($arr['B1'] > 0){
      echo "<tr>";
        echo "<td>BeanBag-1</td>";
        echo "<td data-label=\"Qty\"><input type=\"number\" name=\"B1\" class=\"\" id=\"beanbagNumber1$ticketNumber\" onchange= \"updateTotalPrice($ticketNumber);totalTicketCost($totalTickets);\" value = $arr[B1]> </td>";
        echo "<td data-label=\"Total\"><div id=\"totalBeanbag1$ticketNumber\"> <span>\$0.00</span> </div></td>";
      echo "</tr>";
   }
      if ($arr['B2'] > 0){
      echo "<tr>";
        echo "<td>BeanBag-2</td>";
        echo "<td data-label=\"Qty\"><input type=\"number\" name=\"B2\" class=\"\" id=\"beanbagNumber2$ticketNumber\" onchange= \"updateTotalPrice($ticketNumber);totalTicketCost($totalTickets);\" value = $arr[B2]> </td>";
        echo "<td data-label=\"Total\"><div id=\"totalBeanbag2$ticketNumber\"> <span>\$0.00</span> </div></td>";
      echo "</tr>";
   }
      if ($arr['B3'] > 0){
      echo "<tr>";
        echo "<td>BeanBag-3</td>";
        echo "<td data-label=\"Qty\"><input type=\"number\" name=\"B3\" class=\"\" id=\"beanbagNumber3$ticketNumber\" onchange= \"updateTotalPrice($ticketNumber);totalTicketCost($totalTickets);\" value = $arr[B3]> </td>";
        echo "<td data-label=\"Total\"><div id=\"totalBeanbag3$ticketNumber\"> <span>\$0.00</span> </div></td>";
      echo "</tr>";
   }
   echo "<tr>";
      echo     "<td>Ticket Cost:</td>";
      
     echo   "<td name=\"price\" value= $arr[price]> <div id=\"totalPrice$ticketNumber\"> <span>\$$arr[price].00</span> </div> </td>";
     
     echo "<form action =\"checkout.php\" form method = \"get\" >";
     echo "<input type=\"hidden\" name=\"arrayIndex\" value = $ticketNumber> </input>";
     echo "<td class = td_button> <button class=\"btn red raised submit remove\" type=\"submit\" id=\"removeTicket\">Remove Ticket</button> </td>";
     
     echo "</form>";
     
         // echo "<td> </td>";
   echo  "</tr>";     
   echo "</tbody>";
   echo "</table>";
   echo "</br>";

   echo "<script> updateTotalPrice($ticketNumber); </script>";
   $ticketNumber ++;
    } 
   }
}
  
    
   
    echo '<div id = "totalCost" class = "card_basic_header" name = "totalCost"> Total Cost: <span> </span></div>';
      echo "<script>totalTicketCost($totalTickets);</script>";
      
      
      
      var_dump($_SESSION);

?>
     
  
 <div class="endCheckout" id = "endCheckout">
 
 </br>
 
  <form action="details.php" method = "post">
    <div class = "voucher_wrapper">
      <div id = "voucher"> Voucher Code: <input name = "voucher" type = "text" placeholder = "12345-12345-AZ" pattern = "^\d{5}-\d{5}-[A-Z]{2}$"> </input> </div>
   </div>
 </br>
  <!-- all button is for is clearing the stupid session bookings array at this stage-->
  <button class="btn green raised submit checkout" id="finaliseBooking" type="submit" name="ticket">Complete order</button>
  
  </form>
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