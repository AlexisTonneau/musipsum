<?php


class AccountManager extends Model
{
    /*public function getAllAccounts()            //RETOURNE UN ARRAY DE TOUS LES COMPTES (POSSIBLEMENT UTILE POUR LES BARRES DE RECHERCHE)
    {
        $this->getBdd();
        return $this->getAll('users','Account');
    }*/

    public static function getAnAccountById($id)
    {
        $fetched = self::getAllAccounts();
        foreach ($fetched as $account){
            if($account->getId() === $id){
                return $account;
            }
        }
        return null;
    }

    public static function getCurrentAccount() :User{           //RETOURNE SOUS TYPE USER LE COMPTE ACTUELLEMENT CONNECTE
        if(isset($_SESSION['user'])AND $_SESSION['user'] !== null){
            $account = $_SESSION['user'];
            return unserialize($account);

        }

    }

    public static function getCurrentAccountRefresh() :User{
        return self::getAnAccountById(unserialize($_SESSION['user'])->getId());
    }
    public static function deleteAccount()
    {
        if(isset($_POST['delete'])) {
           $id = $_POST['delete'];
            $bdd = self::getBdd();
            $req = $bdd->prepare('DELETE FROM user WHERE id_user =:id');
            $req->bindParam(':id', $id);
            $req->execute();
        }
    }

    private static function modifyAccount($id){
        if($id === null){
            header('Location: '.URL.'account');
            return null;
        }
        $account = self::getAnAccountById($id);
        $bdd = self::getBdd();
        if (isset($_POST['first_name'])){
            $req = $bdd->prepare('UPDATE user SET first_name = :name WHERE id_user = :id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$_POST['first_name']);
            $req->execute();
        }
        if (isset($_POST['name'])){
            $req = $bdd->prepare('UPDATE user SET name = :name WHERE id_user = :id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$_POST['name']);
            $req->execute();
        }
        if (isset($_POST['weight']) && $_POST['weight']!=='0'){
            $req = $bdd->prepare('UPDATE user SET weight = :name WHERE id_user = :id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$_POST['weight']);
            $req->execute();
        }
        if (isset($_POST['height'])&& $_POST['height']!=='0'){
            $req = $bdd->prepare('UPDATE user SET height = :name WHERE id_user = :id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$_POST['height']);
            $req->execute();
        }
        if (isset($_POST['account_type'])){
            switch ($_POST['account_type']){
                case 'admin':
                    $type = Model::ADMINISTRATOR_USER;
                    break;
                case 'monitor':
                    $type = Model::INSTRUCTOR_USER;
                    break;
                case 'user':
                    $type = Model::REGULAR_USER;
                    break;
                default:
                    $type = null;
            }
            if ($type !==null) {
                $req = $bdd->prepare('UPDATE user SET account_type = :name WHERE id_user = :id');
                $req->bindParam(':id', $id);
                $req->bindParam(':name', $type);
                $req->execute();
            }
        }

        if (isset($_POST['jour']) || isset($_POST['mois'])||isset($_POST['annee'])){
            $birthDate = ($_POST['annee'] ?: $account->getNaissanceAnnee()).'-'.($_POST['mois'] ?: $account->getNaissanceMois()).'-'.($_POST['jour'] ?: $account->getNaissanceJour());
            $req = $bdd->prepare('UPDATE user SET birth_date = :name WHERE id_user = :id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$birthDate);
            $req->execute();

        }





    }

    public static function checkModify(){
        if (isset($_POST['id'])){
            self::modifyAccount(is_numeric($_POST['id'])?(int)$_POST['id'] : null);
            header('Location: '.URL.'account');
        }
        if(isset($_POST['modify'])){
            $account = AccountManager::getAnAccountById($_POST['modify']);
        }
        else {
            $account = Model::getCurrentAccount();
        }
        return $account;

    }


}