
// jQuery to collapse the navbar on scroll
$(document).ready(function() {
    $(".navbar-toggler").on("click", function () {
        $("#buttonX").toggleClass("fa-bars fa-times")
    });
    
    $(window).scroll(function () {
        if($(window).scrollTop() >= 20) {
            $(".navbar").addClass("navbar-shrink");
        }
        else {
            $(".navbar").removeClass("navbar-shrink")
        }
    });
});

$(document).ready(function(){

    //jquery for expand and collapse the sidebar
    $('.menu-btn').click(function(){
      $('.sidebar').addClass('active');
      $('.menu-btn').css("visibility", "hidden");
    });

    $('.close-btn').click(function(){
      $('.sidebar').removeClass('active');
      $('.menu-btn').css("visibility", "visible");
    });
  });
