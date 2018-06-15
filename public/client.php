<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2017/12/5
 * Time: 上午10:21
 */

namespace App;
require_once __DIR__ . '/../vendor/autoload.php';

$client = new Client();
$crawler = $client->request('GET', 'http://symfony.com');

$cookieJar = $client->getCookieJar();
// Get array with all cookies
$cookies = $cookieJar->all();
foreach ($cookies as $cookie) {
    var_dump($cookie);
}

$values = $cookieJar->allValues('http://symfony.com');
foreach ($values as $value) {
    // ...
    var_dump($value);
}
