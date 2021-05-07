<?php
namespace Whitesnake\Ellipsis;

require_once __DIR__ . '/../vendor/autoload.php';

use Whitesnake\Ellipsis\Ellipsis;

$example_string = "This is an example string we can use to test the ellipsis";
echo Ellipsis::apply($example_string, 10) . PHP_EOL;
echo Ellipsis::apply($example_string, 10, '>>>');
