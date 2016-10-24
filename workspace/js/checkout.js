// these several functions apply for each ticket type number box, eg. standard adult ticket num change calls adultCost function.
function adultCost(name)
{
  var price = 12;
  //Checks for whether cost needs to be increased, corresponding to the prices
 price = standardPriceChange(price,name);
  // grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($('#adultNumber' + name).val(),10);
      price = price * ticketNum;
      price = price.toFixed(2);
     //Outputs individual ticket type price to corresponding Div in table
  $('#totalAdult'+name).text(price);
  if(isNaN(price))
  {
  price = 0;
  }
  return price;
}
function childCost(name)
{
  var price = 8;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = standardPriceChange(price,name);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($('#childNumber' + name).val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $('#totalChild'+name).text(price);
  
    if(isNaN(price))
  {
  price = 0;
  }
  return price;
}

function concCost(name)
{
  var price = 10;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = standardPriceChange(price,name);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($('#concNumber' + name).val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $('#totalConc' + name).text(price);
   if(isNaN(price))
  {
  price = 0;
  }
  return price;
}

function firstAdultCost(name)
{
  var price = 25;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = firstClassPriceChange(price,name);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($('#firstAdultNumber' + name).val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $('#totalFirstAdult'+name).text(price);
    if(isNaN(price))
  {
  price = 0;
  }
  return price;
}


function firstChildCost(name)
{
  var price = 20;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = firstClassPriceChange(price,name);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($('#firstChildNumber' + name).val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $('#totalFirstChild'+name).text(price);
    if(isNaN(price))
  {
  price = 0;
  }
  return price;
}

function beanbag1Cost(name)
{
  var price = 20;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = beanBagPriceChange(price,name);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($('#beanbagNumber1' + name).val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $('#totalBeanbag1'+name).text(price)
    if(isNaN(price))
  {
  price = 0;
  }
  return price;
}

function beanbag2Cost(name)
{
  var price = 20;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = beanBagPriceChange(price,name);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($('#beanbagNumber2' + name).val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $('#totalBeanbag2'+name).text(price)
   if(isNaN(price))
  {
  price = 0;
  }
  return price;
}

function beanbag3Cost(name)
{
  var price = 20;
  //Checks for whether cost needs to be increased, corresponding to the prices
  price = beanBagPriceChange(price,name);
  //grabs the integer of the changed ticket number for price calculation
  var ticketNum = parseInt($('#beanbagNumber3' + name).val(),10);
  price = price * ticketNum;
  price = price.toFixed(2);
  $('#totalBeanbag3'+name).text(price)
    if(isNaN(price))
  {
  price = 0;
  }
  return price;
}
//changes the total cost displayed based on each ticket purchased
function updateTotalPrice(name)
{
  var price = 0;
  price = price + parseInt(adultCost(name),10);
  price = price + parseInt(concCost(name),10);
  price = price + parseInt(childCost(name),10);
  price = price + parseInt(firstAdultCost(name),10);
  price = price + parseInt(firstChildCost(name),10);
  price = price + parseInt(beanbag1Cost(name),10);
  price = price + parseInt(beanbag2Cost(name),10);
  price = price + parseInt(beanbag3Cost(name),10);
  $('#totalPrice'+name).text(price.toFixed(2));
  //displays to hiden textbox which is needed to submit price data to form
//  $('#submitPrice'+name).val(price);
 // totalTicketCost(numberofTickets)
}



// all standard tickets (SA, SP, SC) increase value by the same amount if the price changes based on day, this change in price is a increased $5
// Make the statements = the class div and make the paramet of function NAME.
function standardPriceChange(price,name)
{
  //two if statements to help readability, first one checks for weekend.
  if($('#sessionDetails' + name).text().indexOf('Saturday') >= 0 || $('#sessionDetails' + name).text().indexOf('Sunday') >= 0 )
  {
    price = price * 1.5;
  }
  //second if statement checks for the weekday 1pm special. Returns -1 if not found
  if( ($('#sessionDetails' + name).text().indexOf('Wednsday') >= 0 || $('#sessionDetails' + name).text().indexOf('Thursday') >= 0 || $('#sessionDetails' + name).text().indexOf('Friday') >= 0)  && $('#sessionDetails' + name).text().indexOf('1pm') < 0)
  {
    price = price * 1.5;
  }
  return price;
}

// all first class tickets also increase by same amount, this is and inceased $5
function firstClassPriceChange(price,name)
{
  //two if statements to help readability, first one checks for weekend.
  if($('#sessionDetails' + name).text().indexOf('Saturday') >= 0 || $('#sessionDetails' + name).text().indexOf('Sunday') >= 0 )
  {
    price = price + 5;
  }
  //second if statement checks for the weekday 1pm special. 

  if( ($('#sessionDetails' + name).text().indexOf('Wednsday') >= 0 || $('#sessionDetails' + name).text().indexOf('Thursday') >= 0 || $('#sessionDetails' + name).text().indexOf('Friday') >= 0)  && $('#sessionDetails' + name).text().indexOf('1pm') < 0)
  {
    price = price + 5;
  }
  return price;
}

// all BeanBag tickets also increase by same amount, this is an inceased $10
function beanBagPriceChange(price,name)
{
  //two if statements to help readability, first one checks for weekend.

  if($('#sessionDetails' + name).text().indexOf('Saturday') >= 0 || $('#sessionDetails' + name).text().indexOf('Sunday') >= 0 )
  {
    price = price + 10;
  }
  //second if statement checks for the weekday 1pm special. 

  if( ($('#sessionDetails' + name).text().indexOf('Wednsday') >= 0 || $('#sessionDetails' + name).text().indexOf('Thursday') >= 0 || $('#sessionDetails' + name).text().indexOf('Friday') >= 0)  && $('#sessionDetails' + name).text().indexOf('1pm') < 0)
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

function totalTicketCost(numberofTickets)
{
//Why this isn't working is beyond me atm......

var price = 0;

  for(var name = 0; name <= numberofTickets; name ++)
  {
  price += parseFloat($('#totalPrice'+name).text(),10);
  }
 
 // $('totalCost, #endCheckout').text(price.toFixed(2));
 //$('totalCost, #endCheckout').text("TEST");
 $('#totalCost span').text(price.toFixed(2));
}


function validateVoucher() {
  var target = document.getElementsByName("voucher")[0];
  var voucherCode = target.value;
  var re = /^\d{5}-\d{5}-[A-Z]{2}$/;
  if(voucherCode == "") {
    return true;
  }
  else if(re.test(voucherCode)) {
    return true;
  }
  else {
   return false;
  }
}