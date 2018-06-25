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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Psr\Log\LoggerInterface;
use App\Service\MessageGenerator;
use App\Entity\Activity;

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
        $entityManager = $this->getDoctrine()->getManager();

        $activity = new Activity();

        $activity->setAmount("190");
        $activity->setUid(100);
        $activity->setUserName("maeiv");

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($activity);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new JsonResponse(
            $activity->getId()
        );
    }




    /**
     * @Route("/lucky2/list/{id}", requirements={"id" = "\d+"}, defaults={"id" = 1})
     */
    public function list($id){
        return new JsonResponse([1,2]);
    }

    /**
     * @Route("/lucky2/query/{amount}", requirements={"amount" = "\d+"}, defaults={"amount" = 1})
     */
    public function query($amount){

        $activity = $this->getDoctrine()
            ->getRepository(Activity::class)
            ->findAllGreaterThanPrice2($amount);
        if (!$activity) {
            throw $this->createNotFoundException(
                'No activity found '
            );
        }

        $arr = [];

        foreach($activity as $val){
            array_push($arr, $val);
        }

        return new JsonResponse(
            $arr
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