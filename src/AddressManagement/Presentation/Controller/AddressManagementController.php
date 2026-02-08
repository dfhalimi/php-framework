<?php

declare(strict_types=1);

namespace App\AddressManagement\Presentation\Controller;

use App\AddressManagement\Presentation\Dto\PersonDto;
use Framework\Controller\AbstractController;
use Framework\Database\DatabaseConnection;

class AddressManagementController extends AbstractController
{
    public function indexAction(): void
    {
        $conn   = DatabaseConnection::getConnection();
        $result = $conn->execute_query('SELECT * FROM persons;');
        $rows   = $result->fetch_all(MYSQLI_ASSOC);

        $addresses = [];

        foreach ($rows as $row) {
            $addresses[] = new PersonDto(
                $row['id'],
                $row['last_name'],
                $row['first_name'],
                $row['street_address'],
                $row['city'],
                $row['country']
            );
        }

        $this->render(
            './public/address_management/index.php',
            ['addresses' => $addresses]
        );
        http_response_code(200);
    }
}
