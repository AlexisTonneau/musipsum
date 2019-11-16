<?php
$search = new Search();
echo $search->getOutput();



class Search extends Model
{
    private $bdd ;
    private $output;

    /**
     * Search constructor.
     */
    public function __construct()
    {
        $this->output='';
        $this->bdd=self::getBdd();
        $sql = "SELECT * FROM user WHERE name LIKE '%".$_POST["search"]."%'";
        $result = $this->bdd->query($sql);
        if($result->rowCount()>0){
            $this->output.='<h4 align="center">Search Result</h4>';
            $this->output.='<div class="table">
<table class="table search">
    <tr>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Adresse Mail</th>
</tr>
</table>';
            while ($row = $result->fetch()){
                $this->output.= '
             <tr class="lines">
                <td>'.$row["name"].'</td>
                <td>'.$row["first_name"].'</td>
                <td>'.$row["mail_address"].'</td>

              </tr>  
                ';

            }

        }
        else{
            $output = 'Data not found';
        }



    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }




}