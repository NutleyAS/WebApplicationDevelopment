//Method to allow for more text to be shown in description
	function showMore(element){
		var productCardElement = element.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
		var productCardId = productCardElement.getAttribute("id");
		var specificItem = loadedSItem[productCardId-1];
		var fullProductDescription = specificItem.ProductDescription;
		var fullProductDescriptionWithTags = "<p>" + fullProductDescription + "<br><button class=\"asText\" onclick=\"showLess(this);\"> Reduce</a></button>"
		var getToDescription = element.parentElement;
		getToDescription.innerHTML = fullProductDescriptionWithTags;
	}
	//Method to show reduce description when fully displayed
	function showLess(element){
		var productCardElement = element.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
		var productCardId = productCardElement.getAttribute("id");
		var specificItem = loadedSItem[productCardId-1];
		var fullProductDescription = specificItem.ProductDescription;
		var numberOfWords = 0;
			var limitIdex;
			for (var j = 0; j < fullProductDescription.length; j++) {
			  if(fullProductDescription.charAt(j) === " "){
				  numberOfWords += 1;
			  }
			  if(numberOfWords == 27){
				  limitIdex = j;
			  }
			}
		
		var ellipsedProductDescription = fullProductDescription.substring(0, limitIdex+1);
			
		var ellipsedProductDescriptionWithTags = "<p>" + ellipsedProductDescription + " (...) <br><button class=\"asText\" onclick=\"showMore(this);\"> Read More</a></button>"
		
		var getToDescription = element.parentElement;
		
		getToDescription.innerHTML = ellipsedProductDescriptionWithTags;
	}