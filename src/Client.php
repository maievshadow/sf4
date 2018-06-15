<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2017/12/5
 * Time: 上午10:58
 */

namespace App;

use Symfony\Component\BrowserKit\Client as BaseClient;
use Symfony\Component\BrowserKit\Response;

class Client extends BaseClient
{
    protected function doRequest($request)
    {
        // ... convert request into a response

//        return new Response($content, $status, $headers);
        return new Response("<html><body>client</body></html>");
    }
}

