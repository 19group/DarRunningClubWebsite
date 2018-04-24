// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 2500
    })
  });

  var tabsFn = (function() {
  
  function init() {
    setHeight();
  }
  
  function setHeight() {
    var $tabPane = $('.tab-pane'),
        tabsHeight = $('.nav-tabs').height();
    
    $tabPane.css({
      height: tabsHeight
    });
  }
    
  $(init);
})();


// Get the container element
var btnContainer = document.getElementById("parent");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("child");

// Loop through the buttons and add the active class to the current/clicked button
//for (var i = 0; i < btns.length; i++) {
  btns.addEventListener("click", function() {
    var current = document.getElementsByClassName("hide");
    current.className = current.className.replace(" hide", "show");
    this.className += " show";
  });
