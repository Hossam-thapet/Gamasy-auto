
// $(window).scroll(MarginOut);

// function MarginOut() {
//   var tempScrollTop = $(window).scrollTop();
//   console.log(tempScrollTop);
//   if (tempScrollTop > 300 ) {
//     if ($(window).width() < 960) {
//     $(".search-bymodel").css("margin-left",'0%').css("opacity",'1').css("width",'100%').css('transition',' .3s');
//       }
//       else{
//         $(".search-bymodel").css("margin-left",'25%').css("opacity",'1').css("width",'50%').css('transition',' .3s');
//       }
//     }
//   else{
//     if ($(window).width() < 960) {
//       $(".search-bymodel").css("margin-left",'10%').css("opacity",'0').css("width",'100%').css('transition',' .3s');
//     }
//     else{
//     $(".search-bymodel").css("margin-left",'50%').css("opacity",'0').css('transition',' .3s');
//   }
  
// }
// }
// if ($(window).width() < 960) {
//   $('#by-model').css("width","100%");
//   // $(".search-bymodel").css("margin-left",'0px');  
// }
// else {
//   $('#by-model').css("width","50%")
// }


//////////////////////


  $(window).on("load", function () {
    $("#slidetitle").css("margin","0").css("transition","1s")
    $("#slidetitleas").css("margin","0").css("transition","2s")
});


// const pano=document.querySelector('.panoramic');
// const pathpano='../img/1221.jpeg';

// const panorama = new PANOLENS.ImagePanorama( pathpano );
// const viewer = new PANOLENS.Viewer({
//   container:pano ,
//   autoRotate:true,
// });
// viewer.add( panorama );

///////////////////////////////////////////////////////////////////////////


// var panorama, viewer, container, infospot, infospot2, textureLoader, tex1, tex2,container1,panorama1,viewer1;



// textureLoader = new THREE.TextureLoader();
// tex1 = textureLoader.load( 'https://images-na.ssl-images-amazon.com/images/I/61mtx+420hL._AC_US436_QL65_.jpg' );
// tex2 = textureLoader.load( 'https://images-na.ssl-images-amazon.com/images/I/61-eBnYjM9L._AC_US436_QL65_.jpg' );


// panorama = new PANOLENS.ImagePanorama( '../img/panolanc.jpeg' );

// // Default infospot
// infospot = new PANOLENS.Infospot( 
//   1000, 
//   "../img/logoin.png"
// );

// infospot.position.set( 1100, 100, -2000 );
// infospot.addHoverText( "Default Infospot", 100 );
// infospot.addEventListener( "click", function(){
//   firstpic(); 
  

//   // firstpic();
//   // $(".panoramic").fadeOut(2000);
//   // $(".panoramic1").fadeIn();
//   // window.location.href = "sj-abc-info.html";


// } );

// // Custom infospot
// infospot2 = new PANOLENS.Infospot( 
//   600, 
//   "../img/background.jpg"
// );

// // infospot2.material.rotation = 30 * Math.PI / 180;
// infospot2.position.set( 999, 1000, -1000 );
// infospot2.addHoverText( "Custom Infospot", 80 );
// infospot2.addEventListener( "click", function(){
//   location.replace("/next-image");
// } );


// panorama.add( infospot, infospot2 );

// viewer = new PANOLENS.Viewer( { container: container} );

// viewer.add( panorama);
// function firstpic()
// {var container1,viewer1,panorama1;

// container1 = document.querySelector( '.panoramic1' );
// panorama1 = new PANOLENS.ImagePanorama( '../img/1221.jpeg' );
// viewer1 = new PANOLENS.Viewer( { container: container1} );

// viewer1.add( panorama1);
// panorama1.addEventListener( "load", function(){
//   $('.panoramic').css('transform', 'scale(2)').css("transition","2s").fadeOut(1000);
  
  
// })}

// var lang ;

// $(document).ready(function() {
//   $("#arabic").click(function(){
//     lang = "arabic" ;
//     console.log(lang);
//     console.log("did");
//   });
// });
// console.log(lang);
$(document).ready(function(){
  $(".first").click(function(){
    // window.location.replace("http://www.google.com");
    window.open('http://www.google.com', 'name');

  })
});

// $(document).ready(function(){
//   $('body').on('scroll',function(){
//     $("#brandsearch").css("display","none");

//   })
// });

// $("#brandsearch").on( 'scroll', function(){
//   $('#brandsearch').css('display',"none");
// });
// $(document).ready(function(){
// $(".dinamic").change(function(){
//   if($(this).val() != '')
//   {
//     var select =$(this).attr('id');
//     // var input= select.serialize();
//     // var value =$(this).val();
//     // var dependent = $(this).data('dependent');
//     var _token = $('input[name="_token"]').val();
//     $.ajax({
//       url:"{{route('dynamicdependent.fetch')}}",
//       method:"GET",
//       data:select,
//       success:function(result)
//       {
//         $('#'+dependent).html(result);
//       }
//     });
//     // console.log(data);
//   }
//   });
// });
// });
// var value = $("#h1id").val();
// console.log(value);
// console.log(app()->getLocale());

// var dependent = $(".dinamic").attr('brand');
// console.log(dependent);


$(document).ready(function(){
  $(".dinamic").change(function(){
    
    var brand = $(this).val();
    
    
    var length=$(".modeloption").length;
    var number=$(".modeloption").attr('number');
    console.log(length,number,brand);
    // while(length >= number)
    // {
    //   if(brand == brandofmodels)
    //   {
    //     var model=$(`[number=${number}]`);
    //     console.log($(model).val());
    //   }
    // }
    for(number=0 ; number<=length ; number++)
    {
      var model=$(`[number=${number}]`);
      var brandofmodels=$(model).attr('brand');
      if(brand != brandofmodels)
      {
        $(model).prop('disabled', true);
      }
      else{
        $(model).prop('disabled', false);
      }
    }
  // حندخل براندمويل جوا اللوب و حنجيب البراند كل مره يحصل خطوه في اللوب
    // while (brand === brandofmodels) {
    //   // console.log(brandofmodels);
    //   if(number)
    //   {
    //     var model=$(`[number=${number}]`);
    //     console.log($(model).val(),number);
    //     number++ ;
    //   }
    //   else
    //   {
    //     break ;
    //   }
      
    // }
  //   if(brand === brandofmodels)
  //   {
  //     $(this).css('display','block');
  //   }
  //   else
  //   {
  //     $(this).css('display','none');
  //   }
  });
});