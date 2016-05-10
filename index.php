<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pizza Advisor | Maribor</title>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<!-- jquery-->
<script>
        $(document).ready(function(){
          //Skrije vse class opisPizzarije
          $(".opisPizzarije").hide();
          $("#vsiOpisi").click(function(){
           $(".opisPizzarije").show("slide");
    });
          $("#button1").click(function(){
           $(".pizza1").toggle("slide");
    });
          $("#button2").click(function(){
           $(".pizza2").toggle("slide");
    });
          $("#button3").click(function(){
           $(".pizza3").toggle("slide");
    });
          $("#button4").click(function(){
           $(".pizza4").toggle("slide");
    });
          $("#button5").click(function(){
           $(".pizza5").toggle("slide");
    });
});
</script>
<script>
$(document).ready(function(){
  $('.verypopup').magnificPopup({
  type: 'image',
  removalDelay: 300,
  mainClass: 'mfp-fade'
  });
});
</script>
<!-- jquery end-->
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<header>
		<img src="images/2000x200.png" width="100%" height="auto" alt="Pizza Advisor - Maribor"/>
    </header>
<div class="container" align="center">
	<nav>
    	<a href="index.php" class="btn btn-info" role="button">Domov</a>
      	<a href="naj_pizze.php" class="btn btn-default" role="button">Naj Pizzarije</a>
      	<a href="oceni.php" class="btn btn-default" role="button">Oceni</a>
      	<a href="prijava.php" class="btn btn-default" role="button">Prijavi se</a>
    </nav>
  <div class="content">
  	<div class="row">
    	<div class="col-xs-10 col-lg-2 col-md-12">
  			<h2 align="left">Novi vnosi</h2>
        </div>
        <div class="col-xs-10 col-lg-10 col-md-10" align="right">
  			<form>
        		<input type="search" class="text" placeholder="Vnesite ime pizzarije...">
    			<input align="right" class="btn btn-info" type="submit" value="Išči!">
    		</form>
        </div>
     </div>
     <div class="row">
        <div align="right">
          <button id="vsiOpisi" class="btn btn-default">Prikaži vse opise</button>
        </div>
     </div>
     <!--Restavracija 1!-->
     <div class="row">
     	<div class="col-xs-12 col-lg-6">
        	<h3 align="left">Restavracija 1</h3>
            <h4 align="left"><p>Cena bona: 0.50€</p>
            <p>Naslov: test</p>
            <p>Ocena: 5/7</p>
            <p>Dostava: Ne</p></h4>
  			<h4 align="left">Meni</h4>
          		<ul>
            		<li align="left">Pizza klasika</li>
                	<li align="left">Pizza salami</li>
                	<li align="left"> Pizza mexica</li>
            	</ul>
  	        <article>
              <div align="left"><button id="button1" class="btn btn-default">Preberi več...</button></div>
        		<p align="left" class="opisPizzarije pizza1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at varius ligula. Sed congue nibh ut enim vehicula, eu ultricies orci accumsan. Vivamus blandit varius enim at maximus. Nam faucibus tortor et eros malesuada feugiat. Donec justo justo, vestibulum non nunc sed, pellentesque vestibulum est. Vestibulum blandit mauris ac metus vestibulum iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean at efficitur leo. Mauris tristique dolor vel ex auctor ultrices. Nullam a urna nunc. Proin vestibulum leo sed elementum luctus. Cras et lorem in ex ornare feugiat sed et nibh.</p>
        		<p>&nbsp;</p>
        	</article>
  			
        </div>
        <div align="right" class="col-xs-12 col-lg-6">
       		<a class="verypopup" href="images/restaurant-1.png"><img src="images/restaurant-1.png" width="100%" height="100%" alt="Restavracija xyz"/></a>
        </div>
  	</div>
 		
  <!--/Restavracija 1!-->
        
  <!--Restavracija 2!-->
     <div class="row">
     	<div class="col-xs-12 col-lg-6">
        	<h3 align="left">Restavracija 2</h3>
            <h4 align="left"><p>Cena bona: 2.50€</p>
            <p>Naslov: test</p>
            <p>Ocena: 5/10</p>
            <p>Dostava: Da</p></h4>
  			<h4 align="left">Meni</h4>
          		<ul>
            		<li align="left">Pizza šunka, sir, gobice</li>
                	<li align="left">Pizza s salamo</li>
                	<li align="left">Pizza tuna</li>
            	</ul>
  	        <article>
              <div align="left"><button id="button2" class="btn btn-default">Preberi več...</button></div>
        		<p align="left" class="opisPizzarije pizza2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at varius ligula. Sed congue nibh ut enim vehicula, eu ultricies orci accumsan. Vivamus blandit varius enim at maximus. Nam faucibus tortor et eros malesuada feugiat. Donec justo justo, vestibulum non nunc sed, pellentesque vestibulum est. Vestibulum blandit mauris ac metus vestibulum iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean at efficitur leo. Mauris tristique dolor vel ex auctor ultrices. Nullam a urna nunc. Proin vestibulum leo sed elementum luctus. Cras et lorem in ex ornare feugiat sed et nibh.</p>
        		<p>&nbsp;</p>
        	</article>
  			
        </div>
       <div align="right" class="col-xs-12 col-lg-6">
          <a class="verypopup" href="images/restaurant-2.png"><img src="images/restaurant-2.png" width="100%" height="100%" alt="Restavracija xyz"/></a>
        </div>
  	</div>
  <!--/Restavracija 2!-->
  <!--Restavracija 3!-->
     <div class="row">
     	<div class="col-xs-12 col-lg-6">
        	<h3 align="left">Restavracija 3</h3>
            <h4 align="left"><p>Cena bona: 2.75€</p>
            <p>Naslov: test</p>
            <p>Ocena: 2/5</p>
            <p>Dostava: Ne</p></h4>
  			<h4 align="left">Meni</h4>
          		<ul>
            		<li align="left">Sadni kompot z pico</li>
                	<li align="left">Jogurt z pico</li>
                	<li align="left">Pizza jalapeno</li>
            	</ul>
  	        <article>
              <div align="left"><button id="button3" class="btn btn-default">Preberi več...</button></div>
        		<p align="left" class="opisPizzarije pizza3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at varius ligula. Sed congue nibh ut enim vehicula, eu ultricies orci accumsan. Vivamus blandit varius enim at maximus. Nam faucibus tortor et eros malesuada feugiat. Donec justo justo, vestibulum non nunc sed, pellentesque vestibulum est. Vestibulum blandit mauris ac metus vestibulum iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean at efficitur leo. Mauris tristique dolor vel ex auctor ultrices. Nullam a urna nunc. Proin vestibulum leo sed elementum luctus. Cras et lorem in ex ornare feugiat sed et nibh.</p>
        		<p>&nbsp;</p>
        	</article>
  			
        </div>
        <div align="right" class="col-xs-12 col-lg-6">
          <a class="verypopup" href="images/restaurant-3.png"><img src="images/restaurant-3.png" width="100%" height="100%" alt="Restavracija xyz"/></a>
        </div>
  	</div>
  <!--/Restavracija 3!-->
  <!--Restavracija 4!-->
     <div class="row">
     	<div class="col-xs-12 col-lg-6">
        	<h3 align="left">Restavracija 4</h3>
            <h4 align="left"><p>Cena bona: 3.75€</p>
            <p>Naslov: test</p>
            <p>Ocena: 5/5</p>
            <p>Dostava: Ne</p></h4>
  			<h4 align="left">Meni</h4>
          		<ul>
            		<li align="left">Sadni kompot z pico</li>
                	<li align="left">Jogurt z pico</li>
                	<li align="left">Pizza jalapeno</li>
            	</ul>
  	        <article>
              <div align="left"><button id="button4" class="btn btn-default">Preberi več...</button></div>
        		<p align="left" class="opisPizzarije pizza4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at varius ligula. Sed congue nibh ut enim vehicula, eu ultricies orci accumsan. Vivamus blandit varius enim at maximus. Nam faucibus tortor et eros malesuada feugiat. Donec justo justo, vestibulum non nunc sed, pellentesque vestibulum est. Vestibulum blandit mauris ac metus vestibulum iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean at efficitur leo. Mauris tristique dolor vel ex auctor ultrices. Nullam a urna nunc. Proin vestibulum leo sed elementum luctus. Cras et lorem in ex ornare feugiat sed et nibh.</p>
        		<p>&nbsp;</p>
        	</article>
  			
        </div>
        <div align="right" class="col-xs-12 col-lg-6">
          <a class="verypopup" href="images/restaurant-4.png"><img src="images/restaurant-4.png" width="100%" height="100%" alt="Restavracija xyz"/></a>
        </div>
  	</div>
  <!--/Restavracija 4!-->
  <!--Restavracija 5!-->
     <div class="row">
     	<div class="col-xs-12 col-lg-6">
        	<h3 align="left">Restavracija 5</h3>
            <h4 align="left"><p>Cena bona: 0.00€</p>
            <p>Naslov: test</p>
            <p>Ocena: 1/5</p>
            <p>Dostava: Ne</p></h4>
  			<h4 align="left">Meni</h4>
          		<ul>
            		<li align="left">Sadni kompot z pico</li>
                	<li align="left">Jogurt z pico</li>
                	<li align="left">Pizza jalapeno</li>
            	</ul>
  	        <article>
              <div align="left"><button id="button5" class="btn btn-default">Preberi več...</button></div>
        		<p align="left" class="opisPizzarije pizza5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at varius ligula. Sed congue nibh ut enim vehicula, eu ultricies orci accumsan. Vivamus blandit varius enim at maximus. Nam faucibus tortor et eros malesuada feugiat. Donec justo justo, vestibulum non nunc sed, pellentesque vestibulum est. Vestibulum blandit mauris ac metus vestibulum iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean at efficitur leo. Mauris tristique dolor vel ex auctor ultrices. Nullam a urna nunc. Proin vestibulum leo sed elementum luctus. Cras et lorem in ex ornare feugiat sed et nibh.</p>
        		<p>&nbsp;</p>
        	</article>
  			
        </div>
        <div align="right" class="col-xs-12 col-lg-6">
          <a class="verypopup" href="images/restaurant-5.png"><img src="images/restaurant-5.png" width="100%" height="100%" alt="Restavracija xyz"/></a>
        </div>
  	</div>
  <!--/Restavracija 5!-->
        
        
        
  
  </div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Pizza Advisor | Maribor. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
</div>
</body>
</html>
