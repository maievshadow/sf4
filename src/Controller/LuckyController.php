<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2017/12/1
 * Time: 下午2:20
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Psr\Log\LoggerInterface;
use App\Service\MessageGenerator;

class LuckyController extends Controller implements TokenAuthenticatedController
{
    /**
     * @Route("/lucky/number")
     */
    public function number():Response
    {
        throw new \Exception('1223');
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
     * @Route("/lucky/bar")
     */
    public function bar(Request $request)
    {

//        return $this->redirect("/lucky2/foo");
//        return $this->redirectToRoute('homepage');

        $response = new StreamedResponse();
        $response->setCallback(function () {
            var_dump('Hello World');
            flush();
            sleep(2);
            var_dump('Hello World22');
            flush();
        });
        return $response->send();


        $request = Request::create('/lucky2/foo');

        var_dump($request->getContent());
//        $request = Request::createFromGlobals();

        $response = new Response();
        $response->setContent('hh');
        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'application/json');

//        $response = new Response(sprintf('Hello %s', htmlspecialchars($token, ENT_QUOTES, 'UTF-8')));

        $response->setMaxAge(60);

        return $response;
    }

    /**
     * @Route("/lucky/file")
     */
    public function download()
    {

        $filename = '/Users/maievshabu/Desktop/log/a.txt';
        $response = new BinaryFileResponse($filename);
        return $response;
        $response = new Response();
        $response->headers->set('Content-Type', 'text/plain');
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );
        
        return $response;
        // send the file contents and force the browser to download it
        return $this->file($filename);
    }
}