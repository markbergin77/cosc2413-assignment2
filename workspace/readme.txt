Issues:

index.php:
  - Book button on back of cards doesn't work 100% of the time for some reason
  - Tried creating a <div> which contained the header and movie description, so there would be a clickable rectangle only above the button
    but, it still didn't work as inteneded, I think there is some kind of loading issue with the transfrom...
    Don't know how to fix the problem, we should include something about it in the actual readme when we submit the assignment...
    2 non-ideal solutions:
      - allow cards to only flip once, from front to back, then can't flip back to front
      - have a button on the back card, but this may also not work ideally...
  
hamburger:
  - Need to click on actual bars, if somebody clicks on the gap, nothing happens
  
movie cards:
  - Setting the background through css is a bit hacky
  - The plot synopsis gets cut off in an ugly way on certain screen sizes
  - Possibly add more information on front or back, consider runtime, review score, rating (G, PG...)
  - Need to adjust css background-size value for different viewports so images look "cool" at all screen sizes

news:
  - The size of the box is currently relative to the viewport height, should find a way to make it depend on the amount of content, if possible (possibly fixed)
  
contact:
  - appearance is still missing something (ugly)

booking:
  - sizing adjustment is slightly off with the ticket number
  
TO BE DONE TONIGHT/TOMORROW
  index:
    - Write a news statement (make it better).
    
  Schedule
    - I copied the table from the assignment sheet, but it seems ugly.... rearrange it somehow..

READ THROUGH ASSIGNMENT SHEET AGAIN, MAKE SURE WE DIDN'T MISS ANYTHING
  
  
EXTRA STUFF, NICE BUT NOT REQUIRED  
  responsive_table.css:
    - factor out table styling from prices.css and booking.css into a new css file (do last)
    
    
References:

  card-flip: 

    [1]N.  Salloum, 'CSS Transitions, Transforms & Animations – Flipping Card', Call Me Nick, 2014. 
    [Online]. Available: http://callmenick.com/post/css-transitions-transforms-animations-flipping-card. 
    [Accessed: 15- Sep- 2015].
    
  hamburger:

    [2]E.  Manor, 'CSS Animated Hamburger Icon', Elijahmanor.com, 2014. 
    [Online]. Available: http://elijahmanor.com/css-animated-hamburger-icon/. 
    [Accessed: 15- Sep- 2015].
    
  buttons:
  
    [3]R.  Ch, 'Google Material Design', CodePen, 2015. 
    [Online]. Available: http://codepen.io/iraycd/pen/dHrxv. 
    [Accessed: 15- Sep- 2015].
    
  responsive tables:
  
    [4] CodePen, 'QwPVNW', 2015. 
    [Online]. Available: http://codepen.io/anon/pen/QwPVNW. 
    [Accessed: 15- Sep- 2015].

  shopping-cart:
  
    http://codepen.io/msaetre/pen/Ekyaz/