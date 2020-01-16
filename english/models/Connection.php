<?php




class Connection extends AccountManager
{

    public static $array_accounts;


    /**
     * Connection constructor.
     * @throws Exception
     */
    public function __construct()
    {
        //self::setAllAccounts();
        self::$array_accounts = self::getAllAccounts();


    }

    /*public static function setAllAccounts()
    {
        return self::$array_accounts::Model->getAllAccounts();
    }*/

    public function getArray(){
        return self::$array_accounts;
    }

    public static function connect()
    {
        $boole = false;

        $accountsStart = new Connection();
        $accounts = $accountsStart->getArray();


        if (isset($_POST['mail']) && isset($_POST['mdp']) && !is_null($_POST['mail']) && !is_null($_POST['mdp'])) {
            if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) && strlen($_POST['mdp']) > 0) {
                if ($accounts !== null) {
                    for ($i = 0; $i < sizeof($accounts); $i++) {
                        if ($accounts[$i]->getMailAddress() == htmlspecialchars($_POST['mail']) && password_verify(htmlspecialchars($_POST['mdp']),$accounts[$i]->getPassword())) {

                            $boole = true;

                            $_SESSION['user'] = serialize($accounts[$i]);
                            $_SESSION['driving_school'] = serialize(DrivingSchoolManager::getCurrentDrivingSchool());
                            if($accounts[$i]->getAccountType()==Model::REGULAR_USER){
                                $msg = 'Connected';
                            }
                            elseif ($accounts[$i]->getAccountType()==Model::INSTRUCTOR_USER){
                                $msg = 'Connected as admin';


                            }
                            elseif ($accounts[$i]->getAccountType()==Model::ADMINISTRATOR_USER){
                                $msg = 'Administration';
                            }

                            else{
                                throw new Exception('Global variables error');
                            }

                        }
                    }
                    if (!$boole) {
                        $msg = 0;
                    }
                }
            } else {
                $msg = 0;

            }

        }
        else{
            $msg = "";
        }
        return $msg;
    }

    public static function checkIP(){
        $bdd = self::getBdd();
        $ip = $_SERVER['REMOTE_ADDR'];
        $recherche = $bdd->prepare('SELECT * FROM connexion WHERE ip = ?');
        $recherche->execute(array($ip));
        $count = $recherche->rowCount();

        if($count<10){
            if (self::connect()===0){
                $req = $bdd->prepare('INSERT INTO connexion(ip) VALUES(:ip)');
                $req->execute(array('ip' => $ip));
            }
            return true;
        }

        return false;

    }










}
?>

   <?php echo (Connection::connect());

   ?>


