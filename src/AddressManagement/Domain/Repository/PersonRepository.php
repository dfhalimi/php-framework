<?php

declare(strict_types=1);

namespace App\AddressManagement\Domain\Repository;

use App\AddressManagement\Domain\Entity\Person;
use Framework\Database\DatabaseConnection;

class PersonRepository
{
    /**
     * @return Person[]
     */
    public function getAllPersons(): array
    {
        $conn   = DatabaseConnection::getConnection();
        $result = $conn->execute_query('SELECT * FROM persons;');

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}