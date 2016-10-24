<!DOCTYPE html>

<?php 
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
if (!isset($_SESSION['bookings'])) {
    $_SESSION['bookings'] = array();
}
//Use this 
?>

<?php include_once "templates/head_foot_hamburger.php";?>
<html>
<head>
  <?php 
    header("Access-Control-Allow-Origin: *");
    // createst meta tag of get, using the data.
    //
    echo "<meta name='GET' data-movie={$_GET["movie"]} data-movie-title={$_GET["movieTitle"]}>";
    echo $meta;
    echo $styles;
    echo $fonts;
  ?>
  <!-- Page Specific Styles -->
  <link rel="stylesheet" href="css/card_basic.css">
  <link rel="stylesheet" href="css/btn.css">
  <link rel="stylesheet" href="css/video.css">
  <link rel="stylesheet" href="css/booking.css">
  <!-- JQuery -->
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
    <div class = "card_container">
    <!-- /Testing -->
      <div class="card_basic_content">
      <div class = "card_basic_header">Session</div>
        <div class = "form_wrapper">       
        <!-- beginning of form -->
       
        <form method = "post" action ="checkout.php" name="booking_form">
          <div class = "times_wrapper">
            <select id="times" name = "day"></select>
          </div>
          
        
        </div>
        <table id="TICKET LIST">
          <thead>
    				<th>Ticket Type</th>
    				<th>Qty</th>
    				<th>Cost</th>
    			</thead>
    			<tbody>
    				<tr>
    				  <td>Adult</td>
    					<td data-label="Qty"><input type="number" name="SA" class="" id="adultNumber" onchange= "updateTotalPrice('TICKET LIST')" value = 0> </td>
    				  <td data-label="Total"><div id="totalAdult"> <span>0</span> </div></td>
    				</tr>
    				<tr>
    				  <td>Concession</td>
    					<td data-label="Qty"><input type="number" name="SP" class="" id="concNumber" onchange= "updateTotalPrice('TICKET LIST')" value = 0></td>
    					<td data-label="Total"><div id="totalConc"> <span>0</span> </div></td>
    				</tr>
    				<tr>
    				  <td>Child</td>
    					<td data-label="Qty"><input type="number" name="SC" class="" id="childNumber" onchange= "updateTotalPrice('TICKET LIST')" value = 0></td>
    					<td data-label="Total"><div id="totalChild"> <span>0</span> </div></td>
    				</tr>
    				<tr>
    					<td>First Class Adult</td>
    					<td data-label="Qty"><input type="number" name="FA" class="" id="firstAdultNumber" onchange= "updateTotalPrice('TICKET LIST')" value = 0></td>
    					<td data-label="Total"><div id="totalFirstAdult"> <span>0</span> </div></td>
    				</tr>
    				<tr>
    				  <td>First Class Child</td>
    					<td data-label="Qty"><input type="number" name="FC" class="" id="firstChildNumber" onchange= "updateTotalPrice('TICKET LIST')" value = 0></td>
    					<td data-label="Total"><div id="totalFirstChild"> <span>0</span> </div></td>
    				</tr>
    				<tr>
    					<td>Beanbag-1</td>
    					<td data-label="Qty"><input type="number" name="B1" class="" id="beanbagNumber1" onchange= "updateTotalPrice('TICKET LIST')" value = 0></td>
    				  <td data-label="Total"><div id="totalBeanbag1"> <span>0</span> </div></td>
    				</tr>
    				<tr>
    					<td>Beanbag-2</td>
    					<td data-label="Qty"><input type="number" name="B2" class="" id="beanbagNumber2" onchange= "updateTotalPrice('TICKET LIST')" value = 0></td>
    				  <td data-label="Total"><div id="totalBeanbag2"> <span>0</span> </div></td>
    				</tr>
    				<tr>
    					<td>Beanbag-3</td>
    					<td data-label="Qty"><input type="number" name="B3" class="" id="beanbagNumber3" onchange= "updateTotalPrice('TICKET LIST')" value = 0></td>
    				  <td data-label="Total"><div id="totalBeanbag3"> <span>0</span> </div></td>
    				</tr>
    				<tr>
    				  <td>Total Cost</td>
    				  <td name="price" value=0> <div id="totalPrice"> <span>0</span> </div> </td>
    				  <!-- dodgy methodd of submitting price and time -->
    				 <input type="hidden" id="submitPrice" name="price" value = 0>  </input>
    				 <input type="hidden" id="submitDay" name="day" value="" >  </input>
    				 <input type="hidden" id="submitTime" name="time" value="" >  </input>
    				
    				 <?php
    				 //This will be able to get accessed when it's done, the metta tag includes the details of the movie data from JSON site
    				  echo  "<input type=\"hidden\" id=\"submitMovie\" name=\"movie\" id=\"movieTitle\" value = \"$_GET[movieTitle]\"> </input>";

    				 ?>
    				  <!-- stretches design across screen, looking nicer -->
    				  <td></td>
    				</tr>
    				<tr>
    				  <td colspan="3" class = td_button>
    				    	</form>
    				    	
    				    <button class="btn green raised disabled submit checkout" id="submitForm">Move to Checkout</button>
    				  </td>
    				</tr>
    		  </tbody>
    		</table>
    	
    		<!-- grab this form and somehow make that into array --> 
    		<!-- push this to session array -->
    	
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
  <script src ="js/booking.js"></script>
</body>
</html>