//alert('Main.js is working');
var $j = jQuery.noConflict();

$j(".next").click(function(e) {
  // console.log("clicked next");
  // find screen width
  let documentWidth = document.documentElement.clientWidth;
  // console.log(documentWidth);
  // find scroll current position
  scrollPosition = $j(".slide-gallery").scrollLeft();
  // console.log(scrollPosition);
  // add 90vw to scrollPosition
  let scrollAdjustment = scrollPosition + documentWidth;
  // console.log(scrollAdjustment);
  // use scroll left to scroll div over 90vw from it's current position
  $j(".slide-gallery").scrollLeft(scrollAdjustment);
});

$j(".prev").click(function(e) {
  // console.log("clicked prev");
  // find screen width
  let documentWidth = document.documentElement.clientWidth;
  // console.log(documentWidth);
  // find scroll current position
  scrollPosition = $j(".slide-gallery").scrollLeft();
  // console.log(scrollPosition);
  // round scrollAddition to nearest full-image
  // add 90vw to scrollPosition
  let scrollAdjustment = scrollPosition - documentWidth;
  // console.log(scrollAdjustment);
  // use scroll left to scroll div over 90vw from it's current position
  $j(".slide-gallery").scrollLeft(scrollAdjustment);
});
