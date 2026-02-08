<?php

declare(strict_types=1);

require __DIR__ . '/Framework/autoload.php';
require __DIR__ . '/Framework/Database/DatabaseConnection.php';

use App\AddressManagement\Presentation\Controller\AddressManagementController;
use App\Content\Homepage\Presentation\Controller\HomepageController;
use JetBrains\PhpStorm\NoReturn;

$homepageController          = new HomepageController();
$addressManagementController = new AddressManagementController();

$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri === '/') {
    $homepageController->homepageAction();
    return;
}

if (   $requestUri === '/address-management/'
    || $requestUri === '/address-management'
) {
    if (!str_ends_with($requestUri, '/')) {
        redirect($requestUri . '/');
    }
    $addressManagementController->indexAction();
}

http_response_code(404);

#[NoReturn]
function redirect($url, $statusCode = 301): void
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
