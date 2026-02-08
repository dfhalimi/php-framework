<?php

namespace App\AddressManagement\Presentation\Controller;

use App\AddressManagement\Presentation\Dto\PersonDto;
use Framework\Database\DatabaseConnection;

class AddressManagementController
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

        // Start output buffering
        ob_start();

        // Include the template file
        include './public/address_management/index.php';

        // End buffering and return its contents
        $output = ob_get_clean();
        echo $output;

        #readfile('./public/address_management/index.php');
        http_response_code(200);
    }
}
