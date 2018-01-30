<?php
/**
 * Created by PhpStorm.
 * User: abo37
 * Date: 26/01/2018
 * Time: 14:26
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SplashPageController extends Controller
{
    /**
     * @Route("/welcome")
     */
    public function welcome(){

        $messages = array("Liam", "Alan", "Brad", "Paul");
        $welcomeMessage = $messages[array_rand($messages)];

        return $this->render('app/SplashPage/Splashpage.html.twig');
    }
}

