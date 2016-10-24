// From: http://codepen.io/elijahmanor/pen/Igpoe
document.querySelector("#nav_toggle")
  .addEventListener("click", function() {
    this.classList.toggle("active");
    document.querySelector("nav").classList.toggle("active");
});