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
use Psr\Log\LoggerInterface;
use App\Service\MessageGenerator;

class Lucky2Controller extends Controller
{
    /**
     * @Route("/lucky2/number")
     */
    public function number():Response
    {
        $number = mt_rand(0, 20);
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}