<?php
namespace App\EventListener;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpFoundation\Response;
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2018/6/15
 * Time: 上午11:15
 */

class MaievControllerListener
{
    public function onKernelController(FilterControllerEvent $event)
    {
        // ...

        $controller = $event->getController();

        // the controller can be changed to any PHP callable

        $event->setController(function()use($event){
            $request = $event->getRequest();
            $request->getPathInfo();
            return new Response("123".$request->getPathInfo().$request->getPassword());
        });

        echo '1';
    }
}