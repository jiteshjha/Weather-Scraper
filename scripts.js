// $(".mainContainer").css("height",$(window).height()); Jquery method of getting container to fill entire screen, also solved this via CSS

$("#findMyWeather").click(function(event) {
	
	event.preventDefault();
	
		$(".alert").hide();
	
	if ($("#city").val()!="") {	// if users input a city, then we run the get function
		
	$.get("scraper.php?city="+$("#city").val(), function( data ) {
		
		if (data=="") {
			
			$("#fail").fadeIn();
			
		} else {
			
			$("#success").html(data).fadeIn(); // Sets html to the data from the scraper website and then fades in the alert
			
		}
		
	});
	
	} else {
		
		
		$("#noCity").fadeIn();
		
	}
	
});

