<?php
	if(isset($_POST['submit'])){
		//check nom field
		if(!$_POST['nom']){
			$errNom = "Indiquez votre nom";
		}
		

		//check prenom field
		if(!$_POST['prenom']){
			$errPrenom = "Indiquez votre prenom";
		}


		//check address field
		if(!$_POST['address']){
			$errAddress = "Indiquez votre adresse";
		}

		//check message field
		if(!$_POST['message']){
			$errMSG = "Laissez votre message";
		}

		//all filled, send mail
		if (!$errNom && !$errPrenom && !$errAddress && !$errMSG){
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$addr = $_POST['address'];
			$msg = $_POST['message'];

			//mail to client
			$subjectC = "Merci pour nous contacter";
			$ententeC = "From:noreply@com\n";
			$bodyC = "Merci pour nous avoir contacté.\n";
			$bodyC .="Nous accuson la réception des informations suivantes:\n";
			$bodyC .="Nom:$nom\n";
			$bodyC .="Prénom:$prenom\n";
			$bodyC .="Adresse d'e-mail:$addr\n";
			$bodyC .="Message:\n $msg\n";
			$bodyC .="Cordialement\n";
			$bodyC .="Entreprise N/A.";

			//mail to staff
			$sendto = "caj@mailinator.com";
			$subjectS = "Nouveau contact";
			$ententeS = "From:$addr\n";
			$bodyS .="Nom:$nom\n";
			$bodyS .="Prénom:$prenom\n";
			$bodyS .="Adresse d'e-mail:$addr\n";
			$bodyS .="Message:\n $msg\n";

			mail ($addr, $subjectC,$bodyC,$ententeC);
			mail ($sendto,$subjectS,$bodyS,$ententeS);

			echo "Merci pour nous avoir contacté";
			echo "<br/>";
			echo "Retournez à '<a href='/1920/ai/reviewphp/sitedynamique/?page=index'>l'accueil</a>'";


		}

	}
?>