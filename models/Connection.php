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
        self::$array_accounts = $this->getAllAccounts();


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
                        if ($accounts[$i]->getMailAddress() == $_POST['mail'] && password_verify($_POST['mdp'],$accounts[$i]->getPassword())) {
                            $boole = true;

                            $_SESSION['user'] = serialize($accounts[$i]);
                            if($accounts[$i]->getAccountType()==Model::REGULAR_USER){
                                $msg = "Connected";
                            }
                            elseif ($accounts[$i]->getAccountType()==Model::ADMIN_USER){
                                $msg = "Connected as admin";

                            }
                            else{
                                throw new Exception("Global variables error");
                            }

                        }
                    }
                    if (!$boole) {
                        $msg = 'Mail ou mot de passe incorrect';
                    }
                }
            } else {
                $msg = "Mail ou mot de passe incorrect";

            }

        }
        else{
            $msg = "";
        }
        return $msg;
    }






}
