<?php
class Language 
{
private static function setLanguage(){

//On vérifie si le cookie existe déjà
if(isset($HTTP_COOKIE_VARS['lang'])) {
 
    if (isset($_POST['lang'])){
          //Si oui, on change la langue dans le cookie.
    $lang = $_POST['lang'];
 
    }
    else{
        $lang=$_COOKIE['lang'];
    }
      
}
 
else {
    // si le cookie n'existe pas on tente de reconnaitre la langue par défaut du navigateur utilisé
    $lang = substr($HTTP_SERVER_VARS['HTTP_ACCEPT_LANGUAGE'],0,2);
}

//Puis on créé le cookie
setcookie("lang", $lang, time() + $expire,$path='/');

}//function setLanguage

public static function choosePageLanguage(){
    self::setLanguage();
  
switch ($_COOKIE['lang']) {
    case fr:
        $router = new FrRouter();
        $router ->routeReq();
        break;
    case en:
        $router = new EnRouter();
        $router ->routeReq();
        break;
    case es:
        $router = new EsRouter();
        $router ->routeReq();
        break;
    default:
        $router = new FrRouter();
        $router ->routeReq();
}

}

}//Class Language