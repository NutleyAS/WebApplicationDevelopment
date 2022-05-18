//Carousel 
	//Random initial image for Carousel adapted from 8 pratical bootstrap projects (Book)
	//get the number of slides
	var numberSlides = document.querySelectorAll('#carousel-inner .carousel-item').length;
	//Select random slide
	var startSlide = Math.floor((Math.random() * numberSlides));
	//NodeList to store items in the list of "carousel-indicators"
	var indicators = document.querySelectorAll('.carousel-indicators li')
	for(var i = 0; i < indicators.length; i++){
		var slideValue = indicators[i].getAttribute('data-slide-to');
		if(startSlide == slideValue){
			indicators[i].classList.add("active");
			document.querySelectorAll('.carousel-item')[slideValue].classList.add('active');
		}else{
			indicators[i].classList.remove("active");
			document.querySelectorAll('.carousel-item')[slideValue].classList.remove('active');
		}
	}