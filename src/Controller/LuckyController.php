<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2017/12/1
 * Time: 下午2:20
 */
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function number():Response
    {
        $number = mt_rand(0, 20);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/lucky/number2")
     */
    public function number2():Response
    {
        $number = mt_rand(0, 20);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}