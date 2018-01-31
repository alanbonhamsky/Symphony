<?php
/**
 * Created by PhpStorm.
 * User: abo37
 * Date: 26/01/2018
 * Time: 14:26
 */
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PagesController extends Controller
{
    /**
     * @Route("/welcome")
     */
    public function splashPage(Request $request)
    {

        $messages = array("Liam", "Alan", "Brad", "Paul");
        $welcomeMessage = $messages[array_rand($messages)];

        return $this->render('app/SplashPage/Splashpage.html.twig', [
            "message" => $welcomeMessage
        ]);
    }
}


