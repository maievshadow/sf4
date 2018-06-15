<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2017/12/5
 * Time: 上午10:21
 */

namespace App;
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Finder\Finder;
$finder = new Finder();
$finder->in('../bin/');

$finder->files()->in(__DIR__);
foreach ($finder as $file) {
    // Dump the absolute path
    var_dump($file->getRealPath());

    // Dump the relative path to the file, omitting the filename
    var_dump($file->getRelativePath());

    // Dump the relative path to the file
    var_dump($file->getRelativePathname());
}