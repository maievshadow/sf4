<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2018/6/22
 * Time: 下午3:35
 */

namespace App\Service;

class HelloService
{
    private $mailer;

    public function __construct()
    {
//        $this->mailer = $mailer;
    }

    public function hello($name)
    {

//        $message = new \Swift_Message('Hello Service')
//            ->setTo('me@example.com')
//        ->setBody($name.' says hi!');
//
//        $this->mailer->send($message);

        return 'Hello, '.$name;
    }
}