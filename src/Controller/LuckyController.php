<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2017/12/1
 * Time: 下午2:20
 */
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}