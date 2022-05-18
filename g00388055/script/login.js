//LogIn
	//Variable to store the form element of the modal
	var form = document.getElementById("form")
	//Variable to store the input email
	var email = document.getElementById("logInEmail")
	//Variable to store login button
	var submit = document.getElementById("logInModalButton")
		
	//Listener to activate when clicking the modal button
	submit.addEventListener("click", function(){
		//If the form is valid 
		if (form.checkValidity()) {
			//Store input email
			var email = document.getElementById("logInEmail").value
			//Delete @ and store the rest as "name"
			var name = email.substring(0, email.indexOf('@'));
			//If name too long, shorten
			if(name.length > 10){
				var name = name.substring(0, 10);
			}
			//Welcome
			alert("Welcome " + name)
			sessionStorage.setItem("userName", name);
		}
	}) 

	document.addEventListener('DOMContentLoaded', function(){
			loggedIn();			
			checkSavedshoppingBag();
		});

	//Method to alter page for logged in user
	function loggedIn(){
		//Store the data for the session variable
		var userName = sessionStorage.getItem("userName")
		//Check if there's data there 
		if(userName !== null){
			//Fill the empty Div to show the user name in navBar 
			document.getElementById("loggedIn").innerHTML = "<div id=\"userDiv\" class=\"mr-2 row\"><svg style=\"color: white\" class=\"bi bi-people-circle ml-3 mr-2 align-self-center\" width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/><path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/><path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/></svg><div style=\"color: white\" id=\"loggedInName\" class=\"align-self-center\"></div></div>";
			//Fill the empty Div to show the user name in navBar 
			document.getElementById("loggedInName").innerHTML = userName
			//Change the Log In button for the Log Out button
			document.getElementById("logInButton").innerHTML = "Log Out"
			//Change the ID of the button
			document.getElementById("logInButton").setAttribute("id", "logOutButton")
			//Change the button to trigger the Log Out Modal
			document.getElementById("logOutButton").dataset.target = "#logOutModal";
			//Change style of NavBar with user In
			document.getElementById("navBar").setAttribute("class", "navbar sticky-top navbar-expand-lg navbar-dark bg-dark")
			document.getElementById("logoWeb").style.color = 'red'
		}
	}
	
	//Log Out
	var submitOut = document.getElementById("logOutModalButton");
	//Listen to Log Out button for click
	submitOut.addEventListener('click', function(){
		//Remove stored data about the user 
		sessionStorage.removeItem("userName")
		loggedOut();
	});
	
	//Method for log out 
	function loggedOut(){
		//Store session data about the user
		var userName = sessionStorage.getItem("userName");
		//Store if the User div logged In exists 
		var checkForUser = document.getElementById("loggedIn").hasChildNodes();
		if(userName === null && checkForUser){
			document.getElementById("logOutButtonLogOut").remove();
			document.getElementById("logOutText").innerHTML = "Logged Out"
			document.getElementById("exampleModalLabel2").innerHTML = "Goodbye"
			document.getElementById("closeButtonLogOut").setAttribute ("class", "row mt-2 justify-content-center")
			document.getElementById("closeButtonLogOut").innerHTML = "<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>"
			document.getElementById("userDiv").remove();
			document.getElementById("logOutButton").innerHTML = "Log In"
			document.getElementById("logOutButton").setAttribute("id", "logInButton")
			document.getElementById("logInButton").dataset.target = "#logInModal";
			document.getElementById("navBar").setAttribute("class", "navbar sticky-top navbar-expand-lg navbar-light bg-light")
			document.getElementById("logoWeb").style.color = 'black'
			var checkSavedshoppingBag = sessionStorage.getItem("saveshoppingBagSessionVar")
			var checkshoppingBag = document.getElementById("shoppingBagTable")
			if(checkSavedshoppingBag !== null || checkshoppingBag !== null){
				document.getElementById("shoppingBagTable").remove();
				document.getElementById("shoppingBagBadge").innerHTML = 0;
				itemsInBag = []
				createShoppingTable = true
				notShowEmptyshoppingBag();
			}
		}else{
			return
		}
	}	