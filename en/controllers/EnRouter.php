<?php


class EnRouter
{
    private $_ctrl;

    public $errorMessage = "";

    public function routeReq()
    {

        try {
            
            session_start();
            
            //$uri = $_SERVER['REQUEST_URI'];
            $_SESSION['url'][0] = '';


            //Allows logout if inactive during 30min
            $_SESSION['timeout']=time();
            $inactive = 1800;
            if(isset($_SESSION['timeout']) && time()-$_SESSION['timeout']>$inactive){
                session_destroy();
            }

            //ALL CLASSES AUTO-LOAD
            spl_autoload_register(function ($class) {

                require_once('en/models/' . $class . '.php');
            }
            );
            if (isset($_GET['link'])&&!is_null($_GET['link'])) {
                //Ici l'URL est bien trouvée et définie
                $url = explode('/',filter_var($_GET['link'],FILTER_SANITIZE_URL));

                if (isset($_GET['ref'])){
                    $url[1] = $_GET['ref'];
                }
                else{
                    $url[1]='none';
                }
                $_SESSION['url'] = $url;


                $controller = ucfirst(strtolower($url[0])); //Première lettre en majuscule et le reste en minuscule
                $controllerClass = 'Controller' . $controller; //ControllerAdminaccount
                $controllerFile = 'en/controllers/' . $controllerClass . '.php';
                if (file_exists($controllerFile)) {
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                } else {
                    throw new Exception('Page introuvable');
                }

            } else {       //Redirection de base si mauvaise URL
                require_once('en/controllers/ControllerAccueil.php');
                $this->_ctrl = new ControllerAccueil();
                $_SESSION['url'][0] = 'accueil';
                $_SESSION['url'][1] = 'none';

            }

        } catch (Exception $exception) {


            $errorMessage = $exception->getMessage();
            require_once('en/views/viewError.php');

        }
    }

}
