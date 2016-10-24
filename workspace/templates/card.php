<?php 
  function createCard($movie) {
    $card = <<< CARD
      <div class="card effect_click">
        <div class="card_front" title = "{$movie['title']}" style = "background-image: url('../{$movie['image']}')">
          <div class = "card_header">
            <div class = "header_title">{$movie['title']}</div>
            <div class = "header_rating">{$movie['rating']}</div>
          </div>
        </div>
        <div class="card_back">
          <div class = "card_header">
            <div class = "header_title">{$movie['title']}</div>
            <div class = "header_rating">{$movie['rating']}</img></div>
          </div>
          <div class = "card_text">{$movie['description']}</div>
          <a href = "booking.php?movie={$movie['movie']}" class = "btn raised green">Book Tickets</a>
        </div>
      </div>
CARD;
    echo $card;
  }
?>