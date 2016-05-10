<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pizza Advisor | Maribor</title>

<!--jQuery UI Bootstrap from https://jquery-ui-bootstrap.github.io/jquery-ui-bootstrap/ -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.9.2.custom.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.0.custom">
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/jquery-ui.structure.css">
<!--do i need this?-->
<link rel="stylesheet" type="text/css" href="jquery-ui.theme.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery-ui.min.js"></script>

    <script>
    $(function() {
    $( "#slider" ).slider({
    range: "min",
    min: 1,
    max: 5,
    value: 0,
    step: 1,
    slide: function(event, ui){
    	$("#ocenaBox").val(ui.value);
    }
    });
  });

    $(function() {
    var availableoceniPizzo = [
			"Al Pachino",
			"Astoria City Cusine",
			"Bowling center Strike",
			"Bruc bar",
			"Da noi fast food",
			"Eat smart",
			"Fresh 4 life",
			"Galerija, Urška Kocbek",
			"Gurmanski hram",
			"Hitri gonzales",
			"Kanape",
			"Kavarna MM Panda",
			"Kavarna Stil Burger",
			"LEON GOOD FOOD MOOD",
			"Lunch box",
			"Mango Snacks",
			"Okrepčevalnica MM PANDA",
			"Okrepčevalnica Pikapolonica",
			"Okrepčevalnica Pivnica Alf",
			"Pek Matjaž Razlagova",
			"Pek Matjaž Trubarjeva",
			"Pek Matjaž Tyrševa",
			"Pizzeria in špagetarija Da noi",
			"Pizzeria in špageteria Al Capone",
			"Pronto",
			"Restavracija Ancora",
			"Restavracija S",
			"Romska restavracija Romani kafenava",
			"Tasty snacks",
			"Taverna Sicilia",
			"Tottapizza",
			"Trattoria Padrino",
			"Un momento",
			"VERDI",
			"Vivaldi",
			"Žito Maribor Center",
    	];
    $( "#oceniPizzo" ).autocomplete({
      source: availableoceniPizzo
    });
  });
    </script>
</head>
<body>
	<header>
		<img src="images/2000x200.png" width="100%" height="auto" alt="Replace with pizza"/>
    </header>
<div class="container" align="center">
	<nav>
    	<a href="index.php" class="btn btn-default" role="button">Domov</a>
      <a href="naj_pizze.php" class="btn btn-default" role="button">Naj Pizzarije</a>
      <a href="oceni.php" class="btn btn-info" role="button">Oceni</a>
      <a href="prijava.php" class="btn btn-default" role="button">Prijavi se</a>
    </nav>
  <div class="content">
  	<div class="row">
    	<div class="col-xs-3 col-lg-2">
    	  <h2 align="left">Oceni </h2>
    	</div>
        <!-- Seach disabled...
        <div class="col-xs-3 col-lg-10" align="right">
        --> 
    </div>
		<div align="left" class="col-xs-12 col-sm-6 col-lg-3 col-md-4">
			<form method="post" action="podrobnosti.php" data-toggle="validator" role="form" autocomplete="off">
				<div class="form-group">
					<label for="ime">Ime</label>
					<input name="ime" type="text" pattern="^[A-Za-z\šđčćžŠĐŽČĆ]{2,}$" maxlength="15" class="form-control" id="ime" placeholder="Janez" data-error="Vnesite pravilno ime!" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="priimek">Priimek</label>
					<input name="priimek" type="text" pattern="^[A-Za-z\šđčćžŠĐŽČĆ]{2,}$" maxlength="20" class="form-control" id="priimek" placeholder="Novak" required data-error="Vnesite pravilen priimek!">
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="vzdevek">Vzdevek</label>
					<input name="vzdevek" type="text" pattern="^[A-Za-z0-9]{2,}$" maxlength="25" class="form-control" id="vzdevek" placeholder="1337Potato">
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					<div class="help-block">Uporabite lahko samo črke in številke</div>
				</div>
				<div class="ui-widget">
				<label for="oceniPizzo">Izberite pizzerijo:</label>
				<div class="form-group">
				<input name="izbranapizzerija" id="oceniPizzo">
				</div>
				</div>
				<label for="slider">Ocena:</label>
				<input name="ocena" type="text" pattern="^[0-9]{1,}$" class="form-control" id="ocenaBox" >
				<div class="ui-widget slider" id="slider">	
				</div>
				<div class="help-block">Od 1 do 5. 1 = Slabo, 5 = Odlično.</div>
					
					<br/><p><b>Vrsta naročila:</b></p>
				<div class="form-group">

					<div class="radio">
						<label>
							<input type="radio" name="dostava" id="dostava" value="Ne" required>V restavraciji</input>
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="dostava" id="dostava" value="Da" required>Dostava na dom</input>
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="komentar">Komentar:</label>
					<textarea placeholder="komentar" class="form-control" rows="4" id="komentar"></textarea>
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Pošlji</button>
					<button type="reset" class="btn btn-default">Začni znova</button>
				</div>

				</form>
        </div>
        </div>
     </div> 
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Pizza Advisor | Maribor. All rights reserved. Powered by jQuery UI Bootstrap.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/validator.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery-ui.min.js"></script>

</body>
</html>
