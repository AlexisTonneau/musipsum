<?php


class Router
{
    private $_ctrl;
    private $_view;

    public $errorMessage = "";

    public function routeReq()
    {
        try {
            session_start();
            //CHARGEMENT AUTO DES CLASSES
            spl_autoload_register(function ($class) {
                require_once('models/' . $class . '.php');
            }
            );
            if (isset($_GET['link'])&&!is_null($_GET['link'])) {
                //Ici l'URL est bien trouvée et définie
                $url = explode('/',filter_var($_GET['link'],FILTER_SANITIZE_URL));


                $controller = ucfirst(strtolower($url[0])); //Première lettre en majuscule et le reste en minuscule
                $controllerClass = 'Controller' . $controller; //ControllerAdminaccount
                $controllerFile = 'controllers/' . $controllerClass . '.php';
                if (file_exists($controllerFile)) {
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                } else {
                    throw new Exception('Page introuvable - Router : ' . $controller);
                }

            } else {       //Redirection de base si mauvaise URL
                require_once('controllers/ControllerAccueil.php');
                $this->_ctrl = new ControllerAccueil();

            }

        } catch (Exception $exception) {
            //echo $url[0].'</br>';
            //echo $_SERVER[PHP_SELF];

            $errorMessage = $exception->getMessage();
            require_once('views/viewError.php');

        }
    }

}