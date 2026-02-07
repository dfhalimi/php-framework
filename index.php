<?php
require __DIR__ . '/framework/autoload.php';

use App\Content\Homepage\Presentation\Controller\HomepageController as HomepageController;

$homepageController = new HomepageController();

if ($_SERVER['REQUEST_URI'] === '/') {
    $homepageController->homepageAction();
    return;
}

http_response_code(404);
