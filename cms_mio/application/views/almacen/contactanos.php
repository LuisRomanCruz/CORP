 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQPsRLDKmPVTtlM8WPGc2mFSEVBqItHck"></script>
 <script type="text/javascript">
	  // When the window has finished loading create our google map below
			 google.maps.event.addDomListener(window, 'load', init);

		function init() {
	    // Basic options for a simple Google Map
	    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	    //marcador con la ubicación de la Universidad


    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 14,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(-13.516153, -71.976649), // New York

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{featureType:"road",elementType:"geometry",stylers:[{lightness:100},{visibility:"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF",}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(-13.516153, -71.976649),
        map: map,
        title: 'Art Elizabeth'
    });

    var popup = new google.maps.InfoWindow({
	  content: 'Elizabeth Art'});
  	popup.open(map, marker);  

	  //Imagen a mostrar con su ruta
		// var image = new google.maps.MarkerImage(
		//  										'../assets/dist/images/galeria.png', 												
		// 										new google.maps.Size(71, 71),
		// 								    new google.maps.Point(0, 0),
		// 								    new google.maps.Point(17, 34),
		// 								    new google.maps.Size(55, 55)
		// );

		//Marcador con la imagen anterior como icono
		var place = new google.maps.LatLng(-13.516153, -71.976649);
		var marker = new google.maps.Marker({
		   position: place
		       , map: map
		  	   , title: 'Arte Elizabeth'
		      // , icon: image
		       , animation: google.maps.Animation.DROP,});

}
</script>

	<style type="text/css">
	  /* Set a size for our map container, the Google Map will take up 100% of this container */
	  #map {
	    width: 500px;
	    height: 300px;
	  }
	</style>


	<div class="register">
		<div class="container" id="Contactos">
			<p class="text-center" > CONTACTANOS</p>   

  	<div class="clearfix"></div>     			
	 
	  <div class="map">			
			<figure >							
					<div id="map" style="width:100%;"></div>					 
			</figure>
		</div>
		<br>
		<div class="clearfix"></div>
		   <form> 
				 <div class="register-top-grid">
					<h1>PERSONAL INFORMATION</h1>

					 <div>
						<span>First Name<label>*</label></span>
						<input type="text"> 
					 </div>

					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text"> 
					 </div>

					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text"> 
					 </div>

					 

				  </div>

				  <div class="clearfix"> </div>	

				  <div class="register-bottom-grid">
					   <h4>COMMENTS</h4>
						 <div class="left" >								
							<textarea name="" id="comentario" cols="50" rows="10"></textarea>
						 </div>							
						 <div class="clearfix"> </div>
					</div>

				</form>

				<div class="clearfix"> </div>

				<div class="register-but">
				   <form>
					   <input type="submit" value="SEND" name="">
					   <div class="clearfix"> </div>
				   </form>
				</div>

		   </div>
	</div>



	

	
    
	