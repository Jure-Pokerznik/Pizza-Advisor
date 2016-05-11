<!DOCTYPE html>
<?php
$con=mysqli_connect("","","","");
if (mysqli_connect_errno($con)){
  echo "Failed to connect to " . mysqli_connect_error();
}
else {

  mysqli_query($con,"INSERT INTO pizza-advisor (ime, priimek, vzdevek, izbranapizzerija, ocena, dostava, comment) VALUES ('$_REQUEST[ime]', '$_REQUEST[priimek]', '$_REQUEST[vzdevek]', '$_REQUEST[izbranapizzerija]', '$_REQUEST[ocena]', '$_REQUEST[dostava]', '$_REQUEST[comment]')");
  
  //echo "INSERT INTO pizza-advisor (ime, priimek, vzdevek, izbranapizzerija, ocena, dostava, comment) VALUES ('$_REQUEST[ime]', '$_REQUEST[priimek]', '$_REQUEST[vzdevek]', '$_REQUEST[izbranapizzerija]', '$_REQUEST[ocena]', '$_REQUEST[dostava]', '$_REQUEST[comment]')";
}
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pizza Advisor | Maribor</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<img src="images/2000x200.png" width="100%" height="auto" alt="Replace with pizza"/>
    </header>
<div class="container" align="center">
	<nav>
    	<a href="index.php" class="btn btn-default" role="button">Domov</a>
      <a href="naj_pizze.php" class="btn btn-default" role="button">Naj Pizzarije</a>
      <a href="oceni.php" class="btn btn-default" role="button">Oceni</a>
      <a href="prijava.php" class="btn btn-default" role="button">Prijavi se</a>
    </nav>
  <div class="content">
  	<div class="row">
    	<div class="col-xs-4 col-lg-4">
  			<h2 align="left">Izpis</h2>  
        </div>
        </div>
        <div class="row">
          <!--PHP start-->
          <table class="table">
            <tr>
              <th>Ime:</th>
              <td><?php echo $_POST["ime"]; ?></td>
            </tr>
            <tr>
              <th>Priimek:</th>
              <td><?php echo $_POST["priimek"]; ?></td>
            </tr>
            <tr>
              <th>Vzdevek:</th>
              <td><?php echo $_POST["vzdevek"]; ?></td>
            </tr>
            <tr>
              <th>Pizzerija:</th>
              <td><?php echo $_POST["izbranapizzerija"]; ?></td>
            </tr>
            <tr>
              <th>Ocena:</th>
              <td><?php echo $_POST["ocena"]; ?></td>
            </tr>
            <tr>
              <th>Dostava:</th>
              <td><?php echo $_REQUEST["dostava"]; ?></td>
            </tr>
            <tr>
              <th>Komentar:</th>
              <td><?php echo $_POST["comment"]; ?></td>
            </tr>
          </table>
             

             <?php
           
           mysql_close($con);
           ?>
          <!--PHP end-->
     </div>
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
</div>
</body>
</html>
