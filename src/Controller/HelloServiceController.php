<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2018/6/22
 * Time: 下午3:36
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\HelloService;

class HelloServiceController extends Controller
{
    /**
     * @Route("/soap")
     */
    public function index(HelloService $helloService)
    {
        $soapServer = new \SoapServer('/Users/maievshabu/study/php/my-project/hello.wsdl');
        $soapServer->setObject($helloService);

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');

        ob_start();
        $soapServer->handle();
        $response->setContent(ob_get_clean());

        return $response;
    }
}