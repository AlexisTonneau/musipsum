<?php


class Router
{
    private $_ctrl;
    private $_view;

    public $errorMessage="";

    public function routeReq(){
        try{
            //CHARGEMENT AUTO DES CLASSES
            spl_autoload_register(function ($class) {
                require_once('models/' . $class . '.php');}
            );
            $url = "";
            if(isset($_GET['url'])){                //Ici l'URL est bien trouvée et définie
                $url = explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0])); //Première lettre en majuscule et le reste en minuscule
                $controllerClass = 'Controller'.$controller;
                $controllerFile = 'controllers/'.$controller.'.php';
                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $this ->_ctrl = new $controllerClass($url);
                }
                else{
                    throw new Exception('Page introuvable');
                }

            }
            else{       //Redirection de base si mauvaise URL
                require_once('controllers/ControllerAccueil.php');
                $this->_ctrl=new ControllerAccueil($url);

            }

        }
        catch (Exception $exception){
            $errorMessage = $exception->getMessage();
            require_once('views/viewError.php');

        }
    }

}