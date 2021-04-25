progressElement = document.getElementById( 'progress' );

      function onEnter ( event ) {

        progressElement.style.width = 0;
        progressElement.classList.remove( 'finish' );

      }

      function onProgress ( event ) {

        progress = event.progress.loaded / event.progress.total * 100;
        progressElement.style.width = progress + '%';
        if ( progress === 100 ) {
          progressElement.classList.add( 'finish' );
        }

      }
      var container = document.querySelector( '.panoramic' );
panorama = new PANOLENS.ImagePanorama( '../img/panolanc.jpeg' );
panorama.addEventListener( 'progress', onProgress );
panorama.addEventListener( 'enter', onEnter );

panorama1 = new PANOLENS.ImagePanorama( '../img/1221.jpeg' );
panorama1.addEventListener( 'progress', onProgress );
panorama1.addEventListener( 'enter', onEnter );

panorama2 = new PANOLENS.ImagePanorama( '../img/car360.jpeg' );
panorama2.addEventListener( 'progress', onProgress );
panorama2.addEventListener( 'enter', onEnter );



panorama.link( panorama1, new THREE.Vector3( -2302.98, 358.27, -4414.74 ) );
panorama.link( panorama2, new THREE.Vector3( -1002.98, 358.27, -4414.74 ) );
panorama1.link( panorama, new THREE.Vector3( -2302.98, 358.27, -4414.74 ) );
panorama2.link( panorama, new THREE.Vector3( -2302.98, 358.27, -4414.74 ) );
viewer = new PANOLENS.Viewer( { container: container} );

viewer.add( panorama,panorama1,panorama2);