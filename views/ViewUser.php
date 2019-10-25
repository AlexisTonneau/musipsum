<?php


class ViewUser extends View
{


    /**
     * View constructor.
     */


    public function generateAccountType($data){
        $content = $this->generateFileUser($this->_file,$data);
        $view = $this->generateFileUser('views/template.php',array()) ;      //TODO RENSEIGNER LES TYPES DE DONNEES A TRANSMETTRE AUX PAGES USER
    }

    private function generateFileUser($file, array $data)
    {
        if(file_exists($file)){
            extract($data); //TODO COMMENT GERE CES DONNEES? (ob_start()...) DONC RETURN QQCHOSE
        }
        else{
            throw new Exception('Fichier '.$file.' introuvable');
        }


    }


}