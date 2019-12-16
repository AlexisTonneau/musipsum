<?php

class Password {
	private 
	$sth = $bdd->prepare('SELECT EXISTS (SELECT * FROM user WHERE email= :email)');
	$sth->execute(array(':email'=>$email));
	$result = $sth->fetchColumn(); 
	if($resultat == 1) {
		$r = mysqli_fetch_assoc($res);
      	$username = $r['username'];
      	$password = rand(999, 99999);
		$password_hash = md5($password);
      	$usql = "UPDATE `login` SET password='$password_hash' WHERE username='$username'";
      	$result = mysqli_query($connection, $usql);
      	if($result){
      		$to_email
      		$subject = 'Réinitialisation du mot de passe'
      		$message = '"Bonjour, veuillez trouvez votre nouveau mot de passe suite à votre demande de réinitialisation pour le site musipsum :" $password'
      		mail($to_email, $subject, $message)
      }
	}
	else 
	   {
	    
	}	
}