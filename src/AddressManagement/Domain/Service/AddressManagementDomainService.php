<?php

namespace App\AddressManagement\Domain\Service;

use App\AddressManagement\Domain\Entity\Person;
use App\AddressManagement\Domain\Repository\PersonRepository;

readonly class AddressManagementDomainService
{
    public function __construct(
       private PersonRepository $repository
    ) {
    }

    /**
     * @return Person[]
     */
    public function getAddresses(): array
    {
        $rows = $this->repository->getAllPersons();

        $addresses = [];

        foreach ($rows as $row) {
            $addresses[] = new Person(
                $row['id'],
                $row['last_name'],
                $row['first_name'],
                $row['street_address'],
                $row['city'],
                $row['country']
            );
        }

        return $addresses;
    }
}
