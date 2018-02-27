<html>	
<head>
	<title>Secured Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
  <!--inscription -->
		<form method="POST" action="save.php">
		  <div class="form-group">
			<label for="exampleInputPseudo">Pseudo</label>
			<input type="text" class="form-control" name="pseudo" id="InputPseudo" aria-describedby="pseudoHelp" placeholder="Ampiditra Pseudo" required>
			<small class="form-text text-muted">eto ny pseudonao</small>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Adresy mailaka</label>
			<input type="email"  name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Ampiditra email" required>
			<small id="emailHelp" class="form-text text-muted">Tsy omenay anizaniza ny emailanao</small>
		  </div>
			<div class="form-group">
			<label for="exampleInputPassword1">Teny miafina</label>
			<input type="password" name="pwd" class="form-control" id="InputPwd" placeholder="Teny miafina" required>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
			</br></br>
		  <div class="form-group">
			<input type="text" name="" class="form-control" id="mContent" disabled>
			</div>
		</form>
</div>
		
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>		
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
