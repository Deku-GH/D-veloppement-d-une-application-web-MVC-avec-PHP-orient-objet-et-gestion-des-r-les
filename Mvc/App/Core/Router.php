<?php
namespace Mvc\App\Core;
use Mvc\App\Core\Controller;
class Router
{
    public function handle($path, $method)
    {

        switch ($path) {

            case '/Home':

                $login = new Controller();
                $login->returnHome();

                break;

            case '/regester':

                $login = new Controller();
                $login->returnRegester();
                break;

            case 'admin':

                break;
            default:
                $login = new Controller();
                $login->returnLogin();

                break;
        }
    }
}
