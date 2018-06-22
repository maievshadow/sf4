<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2017/12/1
 * Time: 下午2:20
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Psr\Log\LoggerInterface;
use App\Service\MessageGenerator;

class Lucky2Controller extends Controller
{

    /**
     * @Route("/lucky2/bar")
     */
    public function bar()
    {
        var_dump(openssl_get_cert_locations());
        return new Response('<h1>hello world</h1>');
    }

    /**
     * @Route("/lucky2/foo")
     */
    public function foo(){
        return new JsonResponse(
            [
                [
                    'name' => 'maiev',
                    'age' => 30,
                    'phone' => [
                        ['id' => 1, 'name' => 2],
                        ['id' => 1, 'name' => 2],
                        ['id' => 1, 'name' => 2]
                    ]
                ],
                [
                    'name' => 'maiev',
                    'age' => 30,
                    'phone' => [
                        ['id' => 3, 'name' => 2],
                        ['id' => 3, 'name' => 2],
                        ['id' => 3, 'name' => 2],
                        ['id' => 3, 'name' => 2]
                    ]
                ],
            ]
        );
    }

    /**
     * @Route("/lucky2/soap", name="homepage")
     */
    public function testSoap(){
        libxml_disable_entity_loader(false);
        $soapClient = new \SoapClient('http://127.0.0.1:8000/soap?wsdl');

        $result = $soapClient->call('hello', array('name' => 'Scott'));

        return new Response($result);
    }
}