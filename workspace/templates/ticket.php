<?php 
function printTicket($arr, $post) {
     echo '<div class="card_basic_content">';
          echo "<div class = 'card_basic_header'>$arr[movie]</div>";
          echo '<table>';
          echo "<tr><td>Customer Name:</td><td>$post[name]</td></tr>";
          echo "<tr><td>Date:</td><td>$arr[day]</td></tr>";
          echo "<tr><td>Time:</td><td>$arr[time]</td></tr>";
          echo "<tr><td>Voucher:</td><td>";
          if($_POST['voucher'] == 1) {
            echo 'YES';
          }
          else {
            echo "NO";
          }

          echo "</td></tr>";
        
        if ($arr['SA'] > 0) {
          echo "<tr><td>Standard Adult:</td><td>$arr[SA]</td></tr>";
        }
        
        if ($arr['SP'] > 0) {
          echo "<tr><td>Concession:</td><td>$arr[SP]</td></tr>";
        }
        
        if ($arr['SC'] > 0) {
          echo "<tr><td>Standard Child:</td><td>$arr[SC]</td></tr>";
        }
     
        if ($arr['FA'] > 0) {
          echo "<tr><td>First Class Adult:</td><td>$arr[FA]</td></tr>";
        }
     
        if ($arr['FC'] > 0) {
          echo "<tr><td>First Class Child:</td><td>$arr[FC]</td></tr>";
        }
     
        if ($arr['B1'] > 0) {
          echo "<tr><td>Beanbag-1:</td><td>$arr[B1]</td></tr>";
        }
        
        if ($arr['B2'] > 0) {
          echo "<tr><td>Beanbag-2:</td><td>$arr[B2]</td></tr>";
        }
        
        if ($arr['B3'] > 0) {
          echo "<tr><td>Beanbag-3:</td><td>$arr[B3]</td></tr>";
        }
        
        $price = calculatePrices($arr,$post);
        
        echo "<tr><td>Session Cost:</td><td> $price </td></tr>";
        
        echo "</table>";
        echo "<div class='image_wrapper'><img src='images/placeholder/qrcode.png'></div>";
            echo "<div class='card_basic_header ticket_footer'>";
            echo "<div class='ticket_cinema_name'>Silverado</div>";
            echo "<div class='ticket_address'>123 Fake Street, Fakebourne</div>";
        echo "</div>";
     echo "</div>";
}
?>

<?php
function calculatePrices($arr,$post)
{

 
 // these two arrays are for the cost calculations


$cost=[
     "SA" =>12,
     "SP" =>10,
     "SC" =>8,
     "FA" =>25,
     "FC" =>20,
     "B1" =>20,
     "B2" =>20,
     "B3" =>20,
  ];
  
 
    
 $sessionCost = 0;
 $increasedCost = false;
 //Checks for a price increase
 $increasedCost = checkPriceIncease($arr);

// Getting the total cost for each booking. Different types of tickets calculated different ways.
$sessionCost += $arr['SA'] * ($cost['SA'] * priceChange($increasedCost,"SA"));
$sessionCost += $arr['SP'] * ($cost['SP'] * priceChange($increasedCost,"SP"));
$sessionCost += $arr['SC'] * ($cost['SC'] * priceChange($increasedCost,"SP")); 
$sessionCost += $arr['FA'] * ($cost['FA'] + priceChange($increasedCost,"FA"));
$sessionCost += $arr['FC'] * ($cost['FC'] + priceChange($increasedCost,"FC"));
$sessionCost += $arr['B1'] * ($cost['B1'] + priceChange($increasedCost,"B1"));
$sessionCost += $arr['B2'] * ($cost['B2'] + priceChange($increasedCost,"B2"));
$sessionCost += $arr['B3'] * ($cost['B3'] + priceChange($increasedCost,"B3"));

if($_POST['voucher'] == 1) {
    $sessionCost = $sessionCost*0.8;
}
//returns int in money format
return money_format("$%i", $sessionCost);
}

function priceChange($increasedCost, $ticketType)
{
    // arrays for the increased ticket price
   $ticketTypeIncrease=[
     "SA" =>"standardPriceChange",
     "SP" =>"standardPriceChange",
     "SC" =>"standardPriceChange",
     "FA" =>"firstClassPriceChange",
     "FC" =>"firstClassPriceChange",
     "B1" =>"beanBagPriceChange",
     "B2" =>"beanBagPriceChange",
     "B3" =>"beanBagPriceChange",
    ];
  
  $increaseTicketCost=[
    "standardPriceChange" => 1.5,
    "firstClassPriceChange" => 5,
    "beanBagPriceChange" => 10,
    ];
    
  if($increasedCost)
  {
    $increasement = $ticketTypeIncrease[$ticketType];
    
    return $increaseTicketCost[$increasement];
  }
  // becasue standard pricing increase is multiplication, must return 1 for no updated ticket.
  //While the other ticket types are increased via addition, so 0 must be returned then
  if($ticketType == "SA" || $ticketType == "SP" || $ticketType == "SC")
  {
  return 1;
  }
  else{
  return 0;
  }
}


function calculateVoucher()
{
   $voucher=[
    0=>"A",
    1=>"B",
    2=>"C",
    3=>"D",
    4=>"E",
    5=>"F",
    6=>"G",
    7=>"H",
    8=>"I",
    9=>"J",
    10=>"K",
    11=>"L",
    12=>"M",
    13=>"N",
    14=>"O",
    15=>"P",
    16=>"Q",
    17=>"R",
    18=>"S",
    19=>"T",
    20=>"U",
    21=>"V",
    22=>"W",
    23=>"X",
    24=>"Y",
    25=>"Z",
    ];  
}


function checkPriceIncease($arr) {
 
 if($arr['day'] == "Saturday" || $arr['day'] == "Sunday") {
   return true; 
   echo "TEST";
 }
 if(($arr['day'] == "Wednesday" || $arr['day'] == "Thursday" || $arr['day'] == "Friday") && $arr['time'] == "1pm") {
  return true; 
 }
 
 return false;
}
?>