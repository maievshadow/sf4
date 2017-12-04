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

    /**
     * @Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"})
     */
    public function list($page = 1, MessageGenerator $messageGenerator)
    {
        $number = mt_rand(0, 20);

        $message = $messageGenerator->getHappyMessage();

        $url = $this->generateUrl('app_lucky_number', array('max' => 10));

        return $this->render('lucky/list.html.twig', array(
            'number' => $number,
            'page' => $page,
            'message' => $message,
            'url' => $url,
        ));
    }

    /**
     * @Route("/lucky/xx", name="lucky_xx")
     */
    public function xxAction(LoggerInterface $logger){

        throw $this->createNotFoundException('The product does not exist');
        $logger->info('We are logging!');
        return $this->redirect('http://symfony.com/doc');
    }
}