<?php
require_once  "../Model/Recreteur.php"; 
class ControlleR extends Recruteur{



    public function setParam(){
        if(isset($_POST["update"])){
            header("location: ../view/userprofile.html");
        }
    }
}