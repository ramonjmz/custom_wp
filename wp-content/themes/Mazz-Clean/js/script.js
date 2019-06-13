$(document).on('ready',function(){
	var children_slides = $('.flexslider-recent').flexslider({
  		slideshow: false, // Remove the animations
  		controlNav : false // Remove the controls
	});

	$('.flexslider-testimonial').flexslider({
		animation:		"fade",
		animationSpeed:	1000,
		slideshowSpeed:	5000,
		controlNav:		true,
		before: function(slider){ // Hijack the flexslider
        	update_children_slides(slider.animatingTo);
    	} 
	});

	function update_children_slides (slide_number){
  	// Iterate through the children slides but not past the max
  		for (i=0;i<children_slides.length;i++) {
    // Run the animate method on the child slide
    		$(children_slides[i]).data('flexslider').flexAnimate(slide_number);
  		}   
	}

	$("#flexi-brands").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

});
