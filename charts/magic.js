$( document ).ready(function() {
//$(window).on('load resize', function(){
    
// init ScrollMagic Controller
var controller = new ScrollMagic.Controller();

// Scene Handler

var scene1 = new ScrollMagic.Scene({
  //triggerElement: "#pinned-trigger1", // point of execution
  duration: 0 , // pin element for the window height - 1
 triggerHook: 0, // don't trigger until #pinned-trigger1 hits the top of the viewport
  reverse: true // allows the effect to trigger when scrolled in the reverse direction
})
.setPin(".toptop") // the element we want to pin
  .addIndicators()
.addTo(controller);



var scene2 = new ScrollMagic.Scene({
triggerElement: "#toptop1", // point of execution
 duration: 0 , // pin element for the window height - 1
triggerHook: 0, // don't trigger until #pinned-trigger1 hits the top of the viewport
  reverse: true // allows the effect to trigger when scrolled in the reverse direction
})
.setPin(".nav") // the element we want to pin
  .addIndicators()
  .setClassToggle("body", "test")// the element we want to pin
.addTo(controller);



  



});



