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
        if (isset($_POST['mail']) && isset($_POST['mdp']) && $_POST['mail'] !== null && $_POST['mdp'] !== null) {
            if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) && strlen($_POST['mdp']) > 0) {
                if ($accounts !== null) {
                    foreach ($accounts as $iValue) {
                        if ($iValue->getMailAddress() == $_POST['mail'] && $iValue->getPassword() == $_POST['mdp']) {
                            $boole = true;

                            $_SESSION['user'] = serialize($iValue);
                            if($iValue->getAccountType()==Model::REGULAR_USER){
                                $msg = "Connected";
                            }
                            elseif ($iValue->getAccountType()==Model::ADMIN_USER){
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
