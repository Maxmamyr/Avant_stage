<?php

	if($pseudo="" && $email="" && $password=""){
		echo "<script>alert('Mbola misy tsy feno ao azafady')</script>";	
		echo "Tsy maintsy fenona ny banga rehetra tompoko","</br></br>";
		echo "<a href='index.php'>Hiverina</a>","</br></br>";
		}
	
	else{
		$servername= "localhost";
		$username = "mamy";
		$password = "";
		$dbname = "MDB";

		try{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			//pdo err mode exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			//prepare sql and bind param
			$mstmt = $conn->prepare("INSERT INTO mtable (userPseudo, userEmail, userPwd)
			VALUES (:userPseudo, :userEmail, :userPwd)");
			$mstmt->bindParam(':userPseudo',$pseudo); 
			$mstmt->bindParam(':userEmail',$email); 
			$mstmt->bindParam(':userPwd',$password); 

			#test & secure function (filter_var:vs not well-formed value; trim:vs extra space,tab,newline ;stripshlashes:vs \; htmlentities/specialchars:vs html injection by saving input as HTML escaped code, )
			function secureInput($mdata){
				$mdata = trim($mdata);
				$mdata = stripslashes($mdata);
				$mdata = htmlentities($mdata);
				return $mdata;
			}

			#row insertion
			$pseudo = secureInput($_POST["pseudo"]);
			$email = filter_var(secureInput($_POST["email"]));
			$password = secureInput($_POST["pwd"]);
			
			//exec 
			$mstmt->execute();
			echo "<script>alert('Efa any anaty base de donnee ny mombanao')</script>";
			echo "voasoratra soamatsara ianao!";

			}
		catch (PDOException $e)
		{
		echo "Error: " . $e -> getMessage();	
		}
	
		$conn = null;	
	}
	
?>