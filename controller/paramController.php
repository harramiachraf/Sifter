<?php
require_once dirname(_DIR_) . '/Model/parameter.php'; 
require_once dirname(_DIR_) . '/Model/competences.php';
require_once dirname(_DIR_) .'/vendor/autoload.php';

use Smalot\PdfParser\Parser;
class paramController extends parameter{


    public function Parametr(){
        if(isset($_POST["update"])){
            $com= new competences();
            $idcomp=$com->getCompetence($_POST["competence"]);
            $this->setParam($_SESSION["id"],$_POST["domaine"],$idcomp["idcom"],$_POST["niveaux-etude"],$_POST["lang"],$_POST["experience"]);
        }
    }
}
?>