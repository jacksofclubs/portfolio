// Begin Navigation
$(window).resize(function() {
  var more = document.getElementById("js-navigation-more");
  if ($(more).length > 0) {
    var windowWidth = $(window).width();
    var moreLeftSideToPageLeftSide = $(more).offset().left;
    var moreLeftSideToPageRightSide = windowWidth - moreLeftSideToPageLeftSide;

    if (moreLeftSideToPageRightSide < 330) {
      $("#js-navigation-more .submenu .submenu").removeClass("fly-out-right");
      $("#js-navigation-more .submenu .submenu").addClass("fly-out-left");
    }

    if (moreLeftSideToPageRightSide > 330) {
      $("#js-navigation-more .submenu .submenu").removeClass("fly-out-left");
      $("#js-navigation-more .submenu .submenu").addClass("fly-out-right");
    }
  }
});

$(document).ready(function() {

  var menuToggle = $("#js-mobile-menu").unbind();
  var menuOptions = $("#js-navigation-menu");
  menuOptions.removeClass("show");

  // When the menu icon is clicked, toggle show/hide
  menuToggle.on("click", function(e) {
    e.preventDefault();
      menuOptions.slideToggle(function() {
        if(menuOptions.is(":hidden")) {
        menuOptions.removeAttr("style");
      }
    });
  });

  // When a navmenu option is clicked during mobile view, hide the navmenu options
  menuOptions.on("click", function(e) {
    var windowWidth = $(document).width();
    if(menuOptions.is(":visible") && windowWidth < 900) {
      menuOptions.slideToggle(function() {
        menuOptions.removeAttr("style");
      });
    }
  });
  // End Navigation

  // Begin Modal
  $(function() {
    $("#modal-1").on("change", function() {
      if ($(this).is(":checked")) {
        $("body").addClass("modal-open");
      } else {
        $("body").removeClass("modal-open");
      }
    });

    $(".modal-fade-screen, .modal-close").on("click", function() {
      $(".modal-state:checked").prop("checked", false).change();
    });

    $(".modal-inner").on("click", function(e) {
      e.stopPropagation();
    });
  });
  // End Modal

  // Begin Flickity
  var elem = document.querySelector('.main-carousel');
  var flkty = new Flickity( elem, {
    // options
    cellAlign: 'left',
    contain: true
  });

  // element argument can be a selector string
  //   for an individual element
  var flkty = new Flickity( '.main-carousel', {
    // options
  });
  // End Flickity

});
// End document.ready

// Called when form submitted
function submitForm(formobj) {
    formobj.btnSubmit.value = "Processing";
    formobj.btnSubmit.disabled = true;
    return true;
}