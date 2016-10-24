//List view of users ticket purchases
//Can be implemented in assignment three so users can select different sessions, time periods to make data collection and bookings easier
$( "#removeTicket" ).click(function() {
  var dataArray = $("#ticketList option:selected").val();
  $( "#ticketList option:selected" ).remove();
}).change();


//process of adding the total cost
$( "#addTicket" ).click(function() {
        //takes all the values from each ticket type and places them into a add cost function
       var addTicket = $("#adultNumber").val()
       var ticketId = $("#adultNumber").attr('name');
       var ticketCost = 12;
      addcost(addTicket,ticketId,ticketCost);
       addTicket = $("#concNumber").val()
        ticketId = $("#concNumber").attr('name');
        ticketCost = 10;
      addcost(addTicket,ticketId,ticketCost);
        addTicket = $("#childNumber").val()
        ticketId = $("#childNumber").attr('name');
        ticketCost = 8;
      addcost(addTicket,ticketId,ticketCost);
       addTicket = $("#firstAdultNumber").val()
        ticketId = $("#firstAdultNumber").attr('name');
        ticketCost = 25;
      addcost(addTicket,ticketId,ticketCost);
       addTicket = $("#firstChildNumber").val()
        ticketId = $("#firstChildNumber").attr('name');
        ticketCost = 20;
      addcost(addTicket,ticketId,ticketCost);
        addTicket = $("#beanbagNumber1").val()
        ticketId = $("#beanbagNumber1").attr('name');
        ticketCost = 20;
       addcost(addTicket,ticketId,ticketCost);
        addTicket = $("#beanbagNumber2").val()
        ticketId = $("#beanbagNumber2").attr('name');
        ticketCost = 20;
       addcost(addTicket,ticketId,ticketCost);
        addTicket = $("#beanbagNumber3").val()
        ticketId = $("#beanbagNumber3").attr('name');
        ticketCost = 20;
      addcost(addTicket,ticketId,ticketCost);
}).change();

//works now just have to change certain things
$("#times").change(function(){
updateTotalPrice();
}).change();

function addcost(ticketNum,ticketId,ticketCost)
{     
 // takes the values passed in to increment cost and add a ticket to a list, allowing users to theoretically book multiple movie sessions.
     var orderCost;
     var totalPrice = 0;
     // only adds ticket/increment cost if users have inputed correct values into number inputs. (greater than 0 & a number).
     
     if(ticketNum > 0 && $.isNumeric(ticketNum)){
       orderCost = ticketNum * ticketCost;
       totalPrice = totalPrice + orderCost;
       totalPrice = totalPrice.toFixed(2);
      //adds a ticket to botom of lis
       $("#ticketList").append($("<option> </option>")
      .text($("#movie option:selected").val() + "," + $("#times option:selected").text() + "," + ticketId + "," + ticketNum + "," + orderCost));
     }
     
}

// these several functions apply for each ticket type number box, eg. standard adult ticket num change calls adultCost function.
function adultCost()
{
  var price = 12;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = standardPriceChange(price);
  // grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($("#adultNumber").val(),10);
      price = price * ticketNum;
      price = price.toFixed(2);
     //Outputs individual ticket type price to corresponding Div in table
  $("#totalAdult span").text(price);
  return price;
}
function childCost()
{
  var price = 8;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = standardPriceChange(price);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($("#childNumber").val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $("#totalChild span").text(price);
  return price;
}

function concCost()
{
  var price = 10;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = standardPriceChange(price);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($("#concNumber").val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $("#totalConc span").text(price);
  return price;
}

function firstAdultCost()
{
  var price = 25;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = firstClassPriceChange(price);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($("#firstAdultNumber").val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $("#totalFirstAdult span").text(price);
  return price;
}


function firstChildCost()
{
  var price = 20;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = firstClassPriceChange(price);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($("#firstChildNumber").val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $("#totalFirstChild span").text(price);
  return price;
}

function beanbag1Cost()
{
  var price = 20;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = beanBagPriceChange(price);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($("#beanbagNumber1").val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $("#totalBeanbag1 span").text(price)
  return price;
}

function beanbag2Cost()
{
  var price = 20;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = beanBagPriceChange(price);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($("#beanbagNumber2").val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $("#totalBeanbag2 span").text(price)
  return price;
}

function beanbag3Cost()
{
  var price = 20;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = beanBagPriceChange(price);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($("#beanbagNumber3").val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $("#totalBeanbag3 span").text(price)
  return price;
}
//changes the total cost displayed based on each ticket purchased
function updateTotalPrice(name)
{
  var price = 0;
  price = price + parseInt(adultCost(),10);
  price = price + parseInt(concCost(),10);
  price = price + parseInt(childCost(),10);
  price = price + parseInt(firstAdultCost(),10);
  price = price + parseInt(firstChildCost(),10);
  price = price + parseInt(beanbag1Cost(),10);
  price = price + parseInt(beanbag2Cost(),10);
  price = price + parseInt(beanbag3Cost(),10);
  $("#totalPrice span").text(price.toFixed(2));
  //displays to hiden textbox which is needed to submit price data to form
  var total_price = parseInt($("#totalPrice span").text());

    $("#submitForm").removeClass("disabled");
 
}

//Submits form button (finalised ticket options)
$( "#submitForm" ).click(function() {
  var valid = true;
  // has to get the total session text and then split that to grab time value for submission
  // Submit already grabs session day value from times option: selected.
  var session = $("#times option:selected").text();
  var time = session.split(" ");
  // (Monday 1pm - time data for 1pm is index 1)
  $("#submitTime").val(time[0]);
  $("#submitDay").val(time[1]);
  valid = checkonSubmit(valid);
  //displays alert box if vadility fails
  if(valid == false)
  {
    alert("All inputed values must be a positive number or 0! Please fix your order!");
  }
  else{
    document.booking_form.submit();
  }
  
}).change();

// all standard tickets (SA, SP, SC) increase value by the same amount if the price changes based on day, this change in price is a increased $5
function standardPriceChange(price)
{
  //two if statements to help readability, first one checks for weekend.
  if($("#times option:selected").text().indexOf('Saturday') >-1 || $("#times option:selected").text().indexOf('Sunday') >-1 )
  {
    price = price * 1.5;
  }
  //second if statement checks for the weekday 1pm special. 
  if( ($("#times option:selected").text().indexOf('Wednesday') >-1  || $("#times option:selected").text().indexOf('Thursday') >-1  || $("#times option:selected").text().indexOf('Friday') >-1 ) && $("#times option:selected").text().indexOf('1pm') < 0 )
  {
    price = price * 1.5;
  }
  return price;
}

// all first class tickets also increase by same amount, this is and inceased $5
function firstClassPriceChange(price)
{
  //two if statements to help readability, first one checks for weekend.
  if($("#times option:selected").text().indexOf('Saturday') >-1 || $("#times option:selected").text().indexOf('Sunday') >-1 )
  {
    price = price + 5;
  }
  //second if statement checks for the weekday 1pm special. 

  if( ($("#times option:selected").text().indexOf('Wednesday') >-1  || $("#times option:selected").text().indexOf('Thursday') >-1  || $("#times option:selected").text().indexOf('Friday') >-1 ) && $("#times option:selected").text().indexOf('1pm') < 0 )
  {
    price = price + 5;
  }
  return price;
}

// all BeanBag tickets also increase by same amount, this is an inceased $10
function beanBagPriceChange(price)
{
  //two if statements to help readability, first one checks for weekend.

  if($("#times option:selected").text().indexOf('Saturday') >-1 || $("#times option:selected").text().indexOf('Sunday') >-1 )
  {
    price = price + 10;
  }
  //second if statement checks for the weekday 1pm special. 

  if( ($("#times option:selected").text().indexOf('Wednesday') >-1  || $("#times option:selected").text().indexOf('Thursday') >-1  || $("#times option:selected").text().indexOf('Friday') >-1 ) && $("#times option:selected").text().indexOf('1pm') < 0 )
  {
    price = price + 10;
  }
  return price;
}

//checks vadility of the ticket numbers (can't order negative tickets)
function checkonSubmit(valid)
{
  if(parseInt($("#adultNumber").val(),10) < 0)
  {
    valid = false;
  }
  if(parseInt($("#concNumber").val(),10) < 0)
  {
    valid = false;
  }
  if(parseInt($("#childNumber").val(),10) < 0)
  {
    valid = false;
  }
  if(parseInt($("#firstAdultNumber").val(),10) < 0)
  {
    valid = false;
  }
  if(parseInt($("#firstChildNumber").val(),10) < 0)
  {
    valid = false;
  }
  if(parseInt($("#beanbagNumber1").val(),10) < 0)
  {
    valid = false;
  }
  if(parseInt($("#beanbagNumber2").val(),10) < 0)
  {
    valid = false;
  }
  if(parseInt($("#beanbagNumber3").val(),10) < 0)
  {
    valid = false;
  }
  //makes sure that the price is a number (if one ticket number isn't a number, totalprice because redundant giving users free tickets)
  if(isNaN(parseInt($("#totalPrice").text(),10)))
  {
    valid = false;
  }
    if(parseInt($("#totalPrice").text(),10) <= 0)
  {
    valid = false;
  }
  return valid;
}

// Generate page using javascript instead of php
// http://saturn.csit.rmit.edu.au/~e54061/wp/moviesJSON.php?movie=AF
// get request stored in meta tag by php

var movie = document.getElementsByName("GET")[0].dataset.movie;
var url = "https://saturn.csit.rmit.edu.au/~e54061/wp/moviesJSON.php?movie=" + movie;
$.getJSON(url, function(data) {
  var title = data["title"];
  var description = data["description"];
  var trailer = data["trailer"];
  var template = `<div class = "card_basic_header">${title}</div>
      <div class = "card_basic_text">${description}</div>
      <video controls>
        <source src=${trailer} type="video/mp4">
      </video>`;
  var card_basic = document.createElement("div");
  card_basic.className = "card_basic_content";
  card_basic.innerHTML = template;
  $( ".card_container" ).prepend(card_basic);
  
  var screenings = data["screenings"];
  var days = Object.keys(screenings);
  var dropDown = document.getElementById("times");
  for(var i = 0; i < days.length; i++) {
    var day = days[i];
    var time = screenings[day];
    var option = document.createElement("option");
    option.setAttribute("value", time);
    option.innerHTML = time + " " + day;
    dropDown.appendChild(option);
    
  }
});

function testFunction(test)
{
  $('#T'+ test).val(20);
}