//Finds the coordinates of navbar relative to the top of the document
	var navPosition = $('#navMain').offset().top;
    console.log(navPosition);

	function stickyNav(){
    
		var navFixed = $(window).scrollTop(); //Finds vertical length from top of the window
    
    //If vertical length is greater than the offset from the top, add class
		if(navFixed > navPosition){
			$('#navMain').switchClass("floatStyle", "stickyStyle", 1000, "easeOutSine" );
            $('#navMain').addClass("sticky");
		} else if (navFixed < navPosition){
            $("#navMain").removeClass("sticky");
            $('#navMain').switchClass("stickyStyle", "floatStyle", 400, "linear" );
        } 
	};

	//Calls the function when window scrolling event occurs
	$(window).scroll(function() {
    	stickyNav();  
	}); 
