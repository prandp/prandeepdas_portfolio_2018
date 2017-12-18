<!DOCTYPE html>
<html>
<head>
	<title>Illustrations</title>
		<meta charset="utf-8">
	<!-- custom CSS file -->
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
	<!-- UiKt file- -->
	
	<!-- Bootstrap and Custom CSS  file -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">

	<script>
// Four images side by side
function four() {
    var elements = document.getElementsByClassName("column");
    var i;
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "25%";
    }
}
// Two images side by side
function two() {
    var elements = document.getElementsByClassName("column");
    var i;
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "50%";
    }
}

// Full-width images
function one() {
    var elements = document.getElementsByClassName("column");
    var i;
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "100%";
    }
}
</script>
</head>
<body>
	<div class="container">

		<div class="p-illusstration clearfix">
				<h3>illustrations</h3>
				 <p>Click on the buttons to change the grid view.</p>
				<button onclick="four()">4</button>
				<button onclick="two()">2</button>
  				<button onclick="one()">1</button>
			</div>
			<div class="row">
				
					<div class="column">
					<img class="raise" src="images/illustration4.jpg" alt="illustration images" style="width: 100%">
					<img src="images/illustration5.jpg" alt="illustration images" style="width: 100%">
					<img src="images/pd.png" alt="illustration images" style="width: 100%">
				</div>
				<div class="column">
					<img src="images/illustration1.jpg" alt="illustration images" style="width: 100%">
					<img src="images/illustration2.jpg" alt="illustration images" style="width: 100%">
					<img src="images/illustration3.jpg" alt="illustration images" style="width: 100%">
					<img src="images/venn1.png" alt="illustration images" style="width: 100%">
					
				</div>
				<div class="column">
					<img src="images/illustration1.jpg" alt="illustration images" style="width: 100%">
					<img src="images/illustration2.jpg" alt="illustration images" style="width: 100%">
					<img src="images/illustration3.jpg" alt="illustration images" style="width: 100%">
					<img src="images/venn1.png" alt="illustration images" style="width: 100%">
					
				</div>		
				
			<a href="index.php"> Back to Home </a>
		
			</div>
				
	</div>
		












<!-- ******************************************* restricted area ******************************************************* -->	
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="/uikit/js/uikit.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="/js/script.js"></script>
</body>
</html>