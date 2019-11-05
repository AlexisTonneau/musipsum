<?php       //Pas trop sur de bien savoir comment l'utiliser celle là mdr


class View
{
    protected $_file;

    public function __construct($action)        //CONSTRUIT LE FICHIER HTML
    {
        $this->_file = 'views/view'.$action.'.php';
    }


}