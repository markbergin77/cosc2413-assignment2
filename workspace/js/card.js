var addListeners = function() {
  // Creates an array containing every card
  var cards = document.querySelectorAll(".card.effect_click");
  // Loop through the array and add a listener to each card
  for (var i = 0, len = cards.length; i < len; i++) {
    var card = cards[i];
    cardClickListener(card);
  }
  
  function cardClickListener(card) {
    card.addEventListener("click", function(e) {
      if(!e.target.classList.contains("btn")) {
        var c = this.classList;
        c.toggle("flipped");
      }
    });
  }
};

/* Need to use a callback to ensure functions execute in the correct order
 * The cards need to be created before listners can be added
 * When createCards completes the callback function is called */
var createCards = function(data, callback) {
  
  /* Object.keys(object) returns an array of an objects keys
   * for example it could return ["AF", "CH", "RC", "AC"] */
  for(var i=0; i<Object.keys(data).length; i++) {
      var key = Object.keys(data)[i];
      var title = data[key]["title"];
      var poster = data[key]["poster"];
      var rating = data[key]["rating"];
      var description = data[key]["description"];
      var title = data[key]["title"];
      
      /* Javascript template string, pretty sweet, only works in new browsers though
       * the stuff in ${} is evaluated as javascript, so the variables are slotted in
       * note the template does not include the <div class="card effect_click"> div
       * as that div is created as a child of card_container and is used as a target to append to */
      var template = `<div class="card_front" title = "${title}" style = "background-image: url('${poster}')">
              <div class = "card_header">
                  <div class = "header_title">${title}</div>
                  <div class = "header_rating"><img src="${rating}"</img></div>
              </div>
          </div>
          <div class="card_back">
              <div class = "card_header">
                  <div class = "header_title">${title}</div>
                  <div class = "header_rating"><img src="${rating}"</img></div>
              </div>
              <div class = "card_text">${description}</div>
              <a href = "booking.php?movie=${key}&movieTitle=${title}" class = "btn raised green">Book Tickets</a>
          </div>`;
      
      var card = document.createElement("div");
      card.className = "card effect_click";
      card.innerHTML = template;
      document.getElementsByClassName('card_container')[0].appendChild(card);
  }
  callback();
};

// Get data then create cards
$.getJSON("https://saturn.csit.rmit.edu.au/~e54061/wp/moviesJSON.php", function(data) {
  createCards(data, addListeners);
});
