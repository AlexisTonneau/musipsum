var passw = document.getElementById("password_strength");


function checkPassword(){
var password = document.getElementById("password_strength").value;
  var strengthVerif = document.getElementById('strength');
  var strength=0;
  if(password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)) {
    strength+=1
  }
  if(password.match(/[~<>?]+/)){
    strength+=1
  }
  if(password.match(/[!@%$&()*]+/)){
    strength+=1
  }
  if(password.length>=8){
    strength+=1
  }

  switch (strength) {
    case 0:
          strengthVerif.value=20;
      break;
    case 1:
          strengthVerif.value=40;
      break;
    case 2:
          strengthVerif.value=60;
      break;
    case 3:
          strengthVerif.value=80;
      break;
    case 4:
          strengthVerif.value=100;
      break;
    default:

  }
}

function passwordLength(){
  alert("coucou");
  if (document.getElementById("password_strength").value.length < 8 ) {
        alert("Votre mot de passe doit contenir au minimum 8 caractères");
        return false;
  }
  else {
        return true;
  }
}

// a la fin de l'input du password : required onkeyup="checkPassword()"
