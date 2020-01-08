<?php
class Language 
{
private static function setLanguage(){
echo 'function';
//On vérifie si le cookie existe déjà
 
    if (isset($_POST['lang'])){
          //Si oui, on change la langue dans le cookie.
    $lang = $_POST['lang'];
    echo 'redirection';
    header('Location :'.URL.$lang);
    }
    
}//function setLanguage

public static function choosePageLanguage(){
    
    self::setLanguage();
    
    $lang=$_GET['lang'];

    
   
switch ($lang) {
    case "fr":
        $router = new FrRouter();
        $router ->routeReq();
        break;
    case "en":
        $router = new EnRouter();
        $router ->routeReq();
        break;
    case "es":
        $router = new EsRouter();
        $router ->routeReq();
        break;
    default:
        $router = new FrRouter();
        $router ->routeReq();
}

}

}//Class Language