
$(window).scroll(MarginOut);

function MarginOut() {
  var tempScrollTop = $(window).scrollTop();
  console.log(tempScrollTop);
  if (tempScrollTop > 300 ) {
    if ($(window).width() < 960) {
    $(".search-bymodel").css("margin-left",'0%').css("opacity",'1').css("width",'100%').css('transition',' .3s');
      }
      else{
        $(".search-bymodel").css("margin-left",'25%').css("opacity",'1').css("width",'50%').css('transition',' .3s');
      }
    }
  else{
    if ($(window).width() < 960) {
      $(".search-bymodel").css("margin-left",'10%').css("opacity",'0').css("width",'100%').css('transition',' .3s');
    }
    else{
    $(".search-bymodel").css("margin-left",'50%').css("opacity",'0').css('transition',' .3s');
  }
  
}
}
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


var panorama, viewer, container, infospot, infospot2, textureLoader, tex1, tex2;

container = document.querySelector( '.panoramic' );
textureLoader = new THREE.TextureLoader();
// tex1 = textureLoader.load( 'https://images-na.ssl-images-amazon.com/images/I/61mtx+420hL._AC_US436_QL65_.jpg' );
// tex2 = textureLoader.load( 'https://images-na.ssl-images-amazon.com/images/I/61-eBnYjM9L._AC_US436_QL65_.jpg' );


panorama = new PANOLENS.ImagePanorama( '../img/1221.jpeg' );

// Default infospot
infospot = new PANOLENS.Infospot( 
  1000, 
  "../img/logoin.png"
);

infospot.position.set( 1100, 100, -2000 );
infospot.addHoverText( "Default Infospot", 100 );
infospot.addEventListener( "click", function(){
  this.focus();
} );

// Custom infospot
infospot2 = new PANOLENS.Infospot( 
  600, 
  "../img/background.jpg"
);

// infospot2.material.rotation = 30 * Math.PI / 180;
infospot2.position.set( 999, 1000, -1000 );
infospot2.addHoverText( "Custom Infospot", 80 );
infospot2.addEventListener( "click", function(){
  location.replace("/next-image");
} );


panorama.add( infospot, infospot2 );

viewer = new PANOLENS.Viewer( { container: container } );
viewer.add( panorama );