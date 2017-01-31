<?php

namespace PhpTal\Issue\Issue57;

use \PHPTAL;

require dirname(__DIR__).'/vendor/autoload.php';

$template = <<<'HTML'
<html>
    <meta charset="utf-8"/>
    <title>Example Code to demonstrate issue 57</title>
    <p>
        <span tal:content="foo"></span>
    </p>
</html>
HTML;

$engine = new PHPTAL();

$engine->setSource($template);

// Direct asignment
$engine->foo = function () {
    return 'Foo';
};

try {
    $result = $engine->execute();
} catch (Exception $exception){
    $result = (string) $exception;
}

echo $result;

/*EOF*/
