<?php

declare(strict_types=1);

namespace App\AddressManagement\Presentation\Controller;

use App\AddressManagement\Presentation\Service\AddressManagementPresentationService;
use Framework\Controller\AbstractController;

class AddressManagementController extends AbstractController
{
    public function indexAction(
        AddressManagementPresentationService $service
    ): void
    {
        $addresses = $service->getAddresses();

        $this->render(
            './public/address_management/index.php',
            ['addresses' => $addresses]
        );
        http_response_code(200);
    }
}
