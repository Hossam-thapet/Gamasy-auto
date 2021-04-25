panorama = new PANOLENS.ImagePanorama( '../img/panolanc.jpeg' );

// Default infospot
infospot = new PANOLENS.Infospot( 
  1000, 
  "../img/logoin.png"
);

infospot.position.set( 1100, 100, -2000 );
infospot.addHoverText( "Default Infospot", 100 );
infospot.addEventListener( "click", function(){
    $(".imagesloaders").css("z-index","10");
  firstpic(); 
  
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
    $(".imagesloaders").css("z-index","10");
  firstcar();
} );


panorama.add( infospot, infospot2 );

viewer = new PANOLENS.Viewer( { container: container} );

viewer.add( panorama);
function firstpic()
{var container1,viewer1,panorama1;

container1 = document.querySelector( '.panoramic1' );
panorama1 = new PANOLENS.ImagePanorama( '../img/1221.jpeg' );
viewer1 = new PANOLENS.Viewer( { container: container1} );

viewer1.add( panorama1);
panorama1.addEventListener( "load", function(){
  $('.panoramic').css('transform', 'scale(2)').css("transition","2s").fadeOut(1000);
  $(".imagesloaders").css("z-index","0");
  $('.panoramic1').css("z-index","3").css("transition-delay","2.3s");
  
  
  
})}

function firstcar()
{
    console.log("active");  
var container2,viewer2,panorama2;

container2 = document.querySelector( '.panoramic2' );
panorama2 = new PANOLENS.ImagePanorama( '../img/car360.jpeg' );
viewer2 = new PANOLENS.Viewer( { container: container2} );

viewer2.add( panorama2);
panorama2.addEventListener( "load", function(){
  $('.panoramic').css('transform', 'scale(2)').css("transition","2s").fadeOut(1000);
  $(".imagesloaders").css("z-index","0");
  $('.panoramic2').css("z-index","3").css("transition-delay","2.3s");
  
})}