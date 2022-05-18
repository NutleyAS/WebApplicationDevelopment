<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
	
	<title>Sports World</title>
		
  </head>
  
  <body>
	
	<!-- Log In Modal -->
	<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Log In</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form id="form">
			  <div class="form-group">
				<label for="logInEmail">Email address</label>
				<input type="email" class="form-control" id="logInEmail" aria-describedby="emailHelp" required>
				<small id="emailHelp" class="form-text text-muted">(Input Any Valid Email)</small>
			  </div>
			  <div class="form-group">
				<label for="logInPassword">Password</label>
				<input type="password" class="form-control" id="logInPassword" required>
				<small id="emailHelp" class="form-text text-muted">(Input Any Password)</small>
			  </div>		  
		  </div>
		  <div class="modal-footer">
			<div class="container">
				<div align="center">
					<button type="submit" class="btn btn-primary btn-block" id="logInModalButton">Log In</button>
				</div>
			</div>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	
	<!-- Log Out Modal -->
	<div class="modal fade" id="logOutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title col-11 text-center" id="exampleModalLabel2">Log Out</h5>
			<button type="button" class="close align-top" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			  <div class="my-2 col-12 text-center padding-0" id="logOutText">Are you sure you want to Log out?</div>
		  </div>
		  <div class="modal-footer">
			<div class="container">
				<div class="row mt-2" id="closeButtonLogOut">
					<div class="col col-6" id="">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					<div class="col col-6" id="logOutButtonLogOut">
						<form>
						<button type="button" class="btn btn-danger" id="logOutModalButton">Log Out</button>
						</form>
					</div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Check Out Modal -->
	<div class="modal fade" id="checkOutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title col-11 text-center" id="exampleModalLabel2">Order Summary</h5>
			<button type="button" class="close align-top" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body" id="checkOutBody">			  
		  </div>
		  <div class="modal-footer">
			<div class="container">
				<div class="row mt-2" id="checkOutCloseButton">
					<div class="col col-6" id="">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					<div class="col col-6" id="buyButtonLogOut">
						<form>
						<button type="submit" class="btn btn-danger float-right" onclick="bought();" id="buyModalButton">Order</button>
						</form>
					</div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  
	<!-- NavBar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" id="navBar">
	
	  <a class="navbar-brand" id="logoWeb">
	  <img src="images/icons/logo.png" height="50" class="img-rounded" alt="company logo">
	  </a>
	  
	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  
		<ul class="navbar-nav mr-auto">
		
		  <li class="nav-item active d-none d-lg-block">
			<a class="nav-link" href="#">Sports World <span class="sr-only">(current)</span></a>
		  </li>
		  		  
		</ul>
				

		
		<!-- Log-In --> 
		<div id="loggedIn"></div>
		
		<!-- Button trigger modal -->
		<div id="LogInButtonWrapper" class="mr-2">
			<button id="logInButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#logInModal">
			  Log In
			</button>
		</div>
		
		<!-- ShoppingBag -->
		<div class="dropdown">
			<button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split mt-2 mt-lg-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="./Images/Icons/ShoppingBag.png" class="shoppingBagIcon mb-1 mr-2" height="20"><span class="badge badge-light" id="shoppingBagBadge">0</span>
				<span class="ShoppingBagTotal"></span>
			</button>
			<div class="dropdown-menu dropdown-menu-right pre-scrollable" style="display:none" id="shoppingBagMenuDropdown" aria-labelledby="dropdownBagButton">
				<div class="table-responsive" id="shoppingBagTableDropDown"></div>
			</div>
		</div>
		
	  </div>
	</nav>

	<!-- Carousel -->
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
		 </ol>
		  
		 <!-- Wrapper Class for Slides -->
		 <div class="carousel-inner" id="carousel-inner">
			<div class="carousel-item">
			  <img src="./images/Carousel/sports1.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./images/Carousel/run2.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./images/Carousel/sports2.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./images/Carousel/stadium1.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="./images/Carousel/basketball1.jpg" class="img-fluid d-block w-100" alt="...">
			</div>
		  </div>
		  
		  <!-- Controls -->
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
	</div>
		
	<!-- Title Grid Over Products -->
		<h2 class="headingGrid" style="color: dark">Sporting Products</h2>

	<!-- Retrieve from DB -->

	<?php
		//Connect to the database
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpassword = "";
		$dbname = "g00388055";
		
		$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		
		//Test for connection
		if(mysqli_connect_errno()){
			die("DB connection failed: " .
				mysqli_connect_errno().
					" (" . mysqli_connect_errno() . ")"
					);
		}
		
		if(!$connection){
			die('Could not connect: ' . mysqli_error());
		}
		
		//Perform DB Query
		$result = mysqli_query($connection,"SELECT * FROM Items");
		
		//Create a class for item Objects
		class SportItem{
				var $Id;
				var $CompanyName;
				var $ProductName;
				var $Image;
				var $Price;
				var $ProductDescription;
				
				public function __construct($Id, $CompanyName, $ProductName, $Image, $Price, $ProductDescription){
					$this->Id = $Id;
					$this->CompanyName = $CompanyName;
					$this->ProductName = $ProductName;
					$this->Image = $Image;
					$this->Price = $Price;
					$this->ProductDescription = $ProductDescription;
				}
		}
		
		//Array to store shop item objects
		$shop = array();
		
		//Loop over the DB
		while($inventoryDB = mysqli_fetch_array($result)){
			${"b".$inventoryDB['Id']} = new SportItem($inventoryDB['Id'], $inventoryDB['CompanyName'], $inventoryDB['ProductName'], 
				$inventoryDB['Image'], $inventoryDB['Price'], $inventoryDB['ProductDescription']);
			array_push($shop, ${"b".$inventoryDB['Id']});
		}
		
		$myJSON = json_encode($shop);
		
		

		$result2 = mysqli_query($connection,"SELECT * FROM Items");

		echo "<div class=\"container-fluid\">
				<div class=\"row gridrow justify-content-center\">";
		while($card = mysqli_fetch_array($result2)){
			
			echo "<div class=\"card border-light mb-5 ml-4 mr-4 productCard\" id=\"" . $card['Id'] . "\">";
			  echo "<div class=\"row no-gutters\">";
				echo "<div class=\"col-md-4 d-flex flex-wrap align-items-center\">";
				  echo "<img src=\"" . $card['Image'] . "\" class=\"card-img\" alt=\"...\" >";
				echo "</div>";
				echo "<div class=\"col-md-8\">";
				  echo "<div class=\"card-body\">";
					echo "<h5 class=\"card-title text-center\">" . $card['CompanyName'] . "</h5>";
					echo "<p class=\"card-text text-justify\">" . $card['ProductName'] . "</p>";
					echo "<div id=\"descriptionHere\"></div>";
					//echo "<p class=\"card-text text-justify\">" . $card['ProductDescription'] . "</p>";
					echo "<div class=\"row\">";
						echo "<div class=\"col\">";
							echo "<a>Price</a>";
						echo "</div>";
						echo "<div class=\"col\">";
							echo "<p class=\"card-text text-center\">" . $card['Price'] . "</a>";
						echo "</div>";
					echo "</div>";
					echo "<div class=\"card-body container\">";
						echo "<div class=\"row justify-content-center\">";
							echo "<button type=\"button\" class=\"btn btn-danger\" id=\"" . $card['Id'] . "\" onclick=\"getItemData(this);\">";
								echo "Add to Bag"; 
							echo "</button>";
						echo "</div>";
					echo "</div>";
				  echo "</div>";
				echo "</div>";
			  echo "</div>";
			echo "</div>";
			
		}
		//Complete Structure
		echo "</div>
			</div>";
	?>
	
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="script/carousel.js"></script>
	<script src="script/login.js"></script>
	<script src="script/prodtxt.js"></script>
	
  </body>
  <script>
  
    //ShoppingBag
	var createShoppingTable = true;
	//Variable stores ID's of the items in Bag
	var itemsInBag =[];
	
	//Get data of item added.
	function getItemData(item){
		var IdItemToBuy = parseInt(item.getAttribute('id'));
		var itemInventory = loadedSItem[IdItemToBuy-1];
		for(var i = 0; i < itemsInBag.length; i++){
			if(itemsInBag[i] == itemInventory.Id){
				alert("Item alredy in the Shopping Bag! Adjust quantity there.");
				return;
				}
		}
		itemsInBag.push(itemInventory.Id);
		var itemName = itemInventory.CompanyName;
		var itemCover = itemInventory.Image;
		var itemPrice = itemInventory.Price;
		var itemId = itemInventory.Id

		updateBag(itemCover, itemPrice, itemName, itemId);
	}
	
	//Method to create shoppingBag table 
	function updateBag(itemCover, itemPrice, itemName, itemId){
		var shoppingTable = document.getElementById("shoppingBagTableDropDown");
		if(createShoppingTable == true){
			showshoppingBag();
			shoppingTable.innerHTML += "<table class=\"table table-sm\" id=\"shoppingBagTable\"><thead><tr><th scope=\"col\">SportItem</th><th class=\"w-100\" scope=\"col\">Name</th><th scope=\"col\">Quantity</th><th scope=\"col\">Price</th></tr></thead><tbody id=\"shoppingBagTableBody\"></tbody><tfoot id=\"shoppingBagFoot\"><tr><td colspan=\"2\"><h5>Total</h5></td><td colspan=\"2\" id=\"totalPrice\">0</td></tr><tr><td colspan=\"4\"><button type=\"button\" class=\"btn btn-primary\" onclick=\"buy()\">Check Out</button></td></tr></tfoot>";
		}

		var table = document.getElementById("shoppingBagTable");
		var newJob = document.createElement("tr");
		newJob.setAttribute("id", ("SCitemId" + itemId));
		newJob.innerHTML = "<tr><td id=\"tdIDIMG\"><img src=\"" + itemCover + "\" class=\"card-img-cart\"></td><td id=\"tdIDName\" class=\"small\">" + itemName + "</td><td id=\"quantityTD\"><form><input type=\"number\" class=\"form-control numberOfItems\" id=\"quantityForm\"  value=\"1\" min=\"1\" oninput=\"managePrice()\"></form><button type=\"button\" class=\"btn btn-danger btn-sm mt-2\" onclick=\"removeBagItem(this)\">Remove</button></td><td>" + itemPrice + "</td></tr>";
		table.tBodies[0].appendChild(newJob);
		createShoppingTable = false;
		
		managePrice();
	}
	function removeBagItem(element){
		var trToDelete = element.parentElement.parentElement;
		var idSaleItemToDelete = (trToDelete.id).substring(8);
		var deleteOnlyRow = checkDeleteTable();
		if(deleteOnlyRow == true){
			trToDelete.remove();
			for(var i = 0; i < itemsInBag.length; i++){
				if(itemsInBag[i] === idSaleItemToDelete){
					delete itemsInBag[i];
				}
			}
			quantityMap.delete(idSaleItemToDelete);			
			managePrice();
		}
	}

	function checkDeleteTable(){	
		var itemsInBagFiltered = itemsInBag.filter(function (filt){
			return filt != null;
		});
		if(itemsInBagFiltered.length == 1){
			document.getElementById("shoppingBagTable").remove();
			itemsInBag = [];
			createShoppingTable = true;
			document.getElementById("shoppingBagBadge").innerHTML = 0;
			notShowEmptyshoppingBag();
			quantityMap.clear();
			return false;
		}else{

			return true;
		}
	}
	
	var quantityMap = new Map();
	
	function managePrice(){

		var itemsInBagQuantity = document.getElementsByClassName("numberOfItems");

		var total = 0;
		var quantityTotal = 0;
		for(var i = 0; i < itemsInBagQuantity.length; i++){
			var quantity = parseInt(itemsInBagQuantity[i].value);
			quantityTotal += quantity;
			var trOfItem = itemsInBagQuantity[i].parentElement.parentElement.parentElement;
			var idSaleItemManagePrice = (trOfItem.id).substring(8);
			var itemInventory = loadedSItem[idSaleItemManagePrice-1];
			var unitaryPrice = parseFloat(itemInventory.Price);
			

			var lotPrice = quantity*unitaryPrice;
			var goToTD = itemsInBagQuantity[i].parentElement.parentElement;
			goToTD.nextSibling.innerHTML = lotPrice.toFixed(2);
			total += lotPrice;
			quantityMap.set(idSaleItemManagePrice, quantity)
		}
		document.getElementById("totalPrice").innerHTML = total.toFixed(2);
		total = 0;
		
		document.getElementById("shoppingBagBadge").innerHTML = quantityTotal
		
		saveshoppingBag();
		
	}
	
	//Method to show what has been purchased
	function bought(){

		var myNode = document.getElementById("shoppingBagTableDropDown");
		myNode.innerHTML = '';
		itemsInBag = [];
		createShoppingTable = true;
		document.getElementById("shoppingBagBadge").innerHTML = 0
		notShowEmptyshoppingBag();
		quantityMap.clear();
		alert("Thank You For Your Order");

	}
	
	//Method prevent empty dropdown 
	function notShowEmptyshoppingBag(){
		sessionStorage.removeItem("saveshoppingBagSessionVar")
		sessionStorage.removeItem("saveBadgeSessionVar")
		document.getElementById("shoppingBagMenuDropdown").style.display = "none"
	}
	
	//Method to allow dropdown when items in bag
	function showshoppingBag(){

		document.getElementById("shoppingBagMenuDropdown").style.display = ""
	}

	function saveshoppingBag(){

		var saveshoppingBag = document.getElementById("shoppingBagTableDropDown").innerHTML
		sessionStorage.setItem("saveshoppingBagSessionVar", saveshoppingBag);
		var saveBadge = document.getElementById("shoppingBagBadge").innerHTML
		sessionStorage.setItem("saveBadgeSessionVar", saveBadge);
		
		//Filter the array
		var itemsInBagFiltered = itemsInBag.filter(function (filt){
				return filt != null;
			});
		
	
		itemsInBagFiltered += ",";
		sessionStorage.setItem("saveitemsInBag", itemsInBagFiltered);
		sessionStorage.setItem("saveCreateTable", createShoppingTable);
		var quantityMapKeys = Array.from( quantityMap.keys());
		var quantityMapValues = Array.from( quantityMap.values());
		sessionStorage.setItem("saveQuantityMapKeys", quantityMapKeys);
		sessionStorage.setItem("saveQuantityMapValues", quantityMapValues);
	}
	
	//Method to check if items in bag when refreshing
	function checkSavedshoppingBag(){
		var checkshoppingBag = sessionStorage.getItem("saveshoppingBagSessionVar")
		if(checkshoppingBag !== null){
			document.getElementById("shoppingBagTableDropDown").innerHTML = sessionStorage.getItem("saveshoppingBagSessionVar");
			document.getElementById("shoppingBagBadge").innerHTML = sessionStorage.getItem("saveBadgeSessionVar");
			showshoppingBag();
			var tempitemsInBag = sessionStorage.getItem("saveitemsInBag");
			var last = 0;
			for(var i = 0; i < tempitemsInBag.length; i++){
				if(tempitemsInBag.charAt(i) === ","){
					var itemId = tempitemsInBag.substring(last, i);
					last = i + 1;
					itemsInBag.push(itemId);
				}
			}
			
			createShoppingTable = sessionStorage.getItem("saveCreateTable");
			quantityMapKeys = sessionStorage.getItem("saveQuantityMapKeys");
			quantityMapValues = sessionStorage.getItem("saveQuantityMapValues");
			for(var i =0; i<quantityMapKeys.length; i++){
				if(quantityMapKeys[i] === ","){continue;}
				quantityMap.set(quantityMapKeys[i], quantityMapValues[i]);
				var tableTRId = "SCitemId" + quantityMapKeys[i];
				var tableTR = document.getElementById(tableTRId)
				var quantityTD = tableTR.firstElementChild.nextSibling.nextSibling;
				var valueInput = quantityTD.firstElementChild.firstElementChild
				valueInput.value = quantityMapValues[i];
			}			
		}
	}
	
	//Method to Manage data inCheckOutModal 
	function buy(){
		var checkLogIn = document.getElementById("loggedIn").hasChildNodes();
		if(!checkLogIn){
			alert("Log In to Purchase")
			return
		}else{
			var getTable = document.getElementById("shoppingBagTableDropDown").innerHTML;
			document.getElementById("checkOutBody").innerHTML = getTable
			var shoppingTable = document.getElementById("checkOutBody").firstElementChild;
			var shoppingTableHead = shoppingTable.firstElementChild;
			var shoppingTableIMGHeading = shoppingTableHead.firstElementChild.firstElementChild;
			shoppingTableIMGHeading.remove();
			var shoppingTableFoot = shoppingTableHead.nextSibling.nextSibling;
			var shoppingTableCheckOutButton = shoppingTableFoot.firstElementChild.nextSibling;
			shoppingTableCheckOutButton.remove();
			var shoppingTableBody = shoppingTableHead.nextSibling;
			var shoppingTableTRs = shoppingTableBody.children;
			for (var i = 0; i < shoppingTableTRs.length; i++) {
			  var tableChild = shoppingTableTRs[i];
			  var idOfItem = (tableChild.id).substring(8);
			  var getMapQuantity = quantityMap.get(idOfItem);
			  var quantityTD = tableChild.firstElementChild.nextSibling.nextSibling;
			  quantityTD.innerHTML = getMapQuantity;
			  var imgTD = tableChild.firstElementChild;
			  imgTD.remove();
			  
			}
			$('#checkOutModal').modal('show');
		}
	}
	
	
	//Load Sport Item Objects
	if(document.readyState == 'loading'){
		document.addEventListener('DOMContentLoaded', function(){
			getObjects();
		});
	}else{
		getObjects();
	}
		
	var loadedSItem;
	
	function getObjects(){
		loadedSItem = <?php echo $myJSON ?>;
		manageDescription();
	}

	//Manage Sale Item Description
	function manageDescription(){
		var displayedItems = document.getElementsByClassName("productCard");
		for(var i = 0; i < displayedItems.length; i++){
			var productId = parseInt(displayedItems[i].getAttribute("id"));
			var specificItem = loadedSItem[productId-1];
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
			var ellipsedProductDescriptionWithTags = "<p>" + ellipsedProductDescription + " (...) <br><button class=\"asText\" onclick=\"showMore(this);\">More Info</a></button>"			
			var goChild = displayedItems[i].firstChild;
			var goBodyContainer = goChild.lastChild;
			var goCardBody = goBodyContainer.firstChild;
			var goTitle = goCardBody.firstChild;
			var goSibling = goTitle.nextSibling;
			var getToDescription = goSibling.nextSibling;
			getToDescription.innerHTML = ellipsedProductDescriptionWithTags
		}
	}
	
  </script>
</html>