$(document).ready(function() {
    var pathname = window.location.pathname;
    console.log(pathname);
        if (pathname == "/en"|| pathname == "/ar") {
            $(".welcome").addClass("active");
        }
        else if (pathname == "/en/cars" || pathname == "/ar/cars") {
          $(".browse").addClass("active");
      }
      else if (pathname == "/en/cars/create"||pathname == "/ar/cars/create") {
        $(".create").addClass("active");
    }
    });
    

    // $(document).ready(function(){
    //     console.log("main")
    //     $("#navbutton").click(function(){
    //       $("nav").toggleClass("bg-light");
    //     })
    //   })

      $(window).scroll(example);

function example() {
  var tempScrollTop = $(window).scrollTop();
  if (tempScrollTop > 100 ) {
      $(".logo-of-project").css("width","12%").css("transition",".5s");
      $(".mainnav").addClass("scrolled").css("transition",".5s");
      
  }
  else{
    $(".logo-of-project").css("width","20%").css("transition",".5s");
    
    $(".mainnav").removeClass("scrolled").css("transition",".5s");
  }
}