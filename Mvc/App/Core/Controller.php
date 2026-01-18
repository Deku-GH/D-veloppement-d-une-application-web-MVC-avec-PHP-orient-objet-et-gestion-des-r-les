<?php 

namespace Mvc\App\Core;
class Controller {

public function returnLogin(){
    return  require  "../App/View/login.php";
}
public function returnHome(){
    return  require  "../App/View/Home.php";
}

public function returnRegester(){
    return  require  "../App/View/regester.php";
}
}


?>