<!DOCTYPE html>
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
        <a href="prijava.php" class="btn btn-info" role="button">Prijavi se</a>
    </nav>
  <div class="content">
  	<div class="row">
    	<div class="col-xs-8 col-lg-2 col-md-6">
    	  <h2 align="left">Registriraj se</h2>
    	</div>
        
        <!-- Seach disabled...
        <div class="col-xs-3 col-lg-10" align="right">
  			
            <form>
        		<input type="search" class="text" placeholder="Vnesite ime pizzarije...">
    			<input align="right" class="btn btn-info" type="submit" value="Išči!">
    		</form>!-->
        </div>
        
        <!--Start login!-->
        
        <div class="col-xs-12 col-sm-6 col-lg-3 col-md4">
            <form data-toggle="validator" role="form" autocomplete="off" name="registracija" onsubmit="return openAlert()">
                <div class="form-group">
                    <label for="username">Uporabniško ime:</label>
                    <input name="registracijaUsername" type="username" id="username" pattern="^[A-z0-9]{2,}$" maxlength="25" class="form-control" placeholder="uporabniško ime" data-error="Vnesete lahko samo črke in številke!" data-delay="10" requred autofocus="true">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="password">Geslo:</label>
                    <input name="registracijaPassword" type="password" data-minlength="6" maxlength="255" class="form-control" data-delay="10" id="password" placeholder="geslo" data-error="Vnesite vsaj 6 znakov!" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                <!--Verify geslo-->
                <div class="form-group">
                    <label for="passwordverify">Ponovi geslo:</label>
                    <input name="registracijaPasswordVerify" type="password" class="form-control" data-minlength="6" maxlength="255" data-delay="10" id="passwordverify" data-match="#password" data-match-error:"Gesli se ne ujemata!" placeholder="ponovi geslo" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input name="registracijaEmail" type="email" class="form-control" maxlength="255" id="email" data-delay="10" placeholder="e-mail" data-error="Vnesite pravilen E-mail naslov!" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="phone">Telefon:</label>
                    <input type="tel" class="form-control" maxlength="30" pattern="^[0-9]{7,}$" data-delay="10" placeholder="telefon" data-error="Vnesite pravilno telefonsko številko!"><!--Not required..-->
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="address">Naslov:</label>
                    <input type="text" class="form-control" maxlength="255" pattern="^[_A-z0-9\]{2,}$" data-delay="10" placeholder="naslov" data-error="Vnesite pravilen naslov!"><!--Not required..-->
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group controls form-inline">
                    <div class="radio">
                        <label>
                            <input type="radio" name="spol" required> Moški
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="spol" required> Ženski
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="spol" required> Marsovec
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="pogojiuporabe">Strinjam se s <a href="EULA.php" target="_blank">pogoji uporabe</a>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="enovice">Prijave me na e-novice
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registriraj se!</button>
                    <button type="reset" class="btn btn-default">Začni znova</button>
                </div>
            </form>
        </div>
<!-- OLD 
        <div class="row">
        <form>
        <div align="left" class="form-group">
        <label for="Username">Uporabniško ime</label><br>
        
        <input type="text" placeholder="uporabniško ime" id="Username">
        </div>
        <div align="left" class="form-group">
        <label for="Password">Geslo</label><br>
        <input type="password" id="Password" placeholder="geslo"/>
        <br>
        <label for="Password2">Ponovi geslo</label><br>
        <input type="password" id="Password2" placeholder="ponovi geslo"/>
        <br>
        <label for="email">E-mail</label><br>
        <input type="email" id="email" placeholder="janez.novak@mail.si"/>
        <br>
        <label for="phone">Telefon</label><br>
        <input type="tel" id="phone" placeholder="040123456"/>
        <br>
        <label for="address">Telefon</label><br>
        <input type="text" id="address" placeholder="Mariborska 30, Maribor"/>
        <br>
        <br>
        <label>
        Spol
        <br>
        <input type="radio" id="Sex_Male"/> Moški
        </label>
        <label>
        <input type="radio" id="Sex_Female"/> Ženski
        </label>
        <label>
        <input type="radio" id="Sex_Alien"/> Marsovec
        </label>
        <br>
        <br>
        <label>
        	<input type="checkbox"> Strinjam se s <a href="EULA.php" target="_blank">pogoji uporabe</a>
        </label>
        <br>
        <label>
        	<input type="checkbox"> Prijavi me na e-novice
        </label>
        <br>
        <button type="reset" class="btn btn-default">Začni znova</button>
        <button type="submit" class="btn btn-default">Registracija</button>
        
        </div>
        </form>
       -->

        
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
<script src="js/validator.js"></script>
<script src="js/alertOnEmpty.js"></script>
</div>
</body>
</html>
