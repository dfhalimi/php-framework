<?php

declare(strict_types=1);

namespace App\AddressManagement\Presentation\Service;

use App\AddressManagement\Domain\Service\AddressManagementDomainService;
use App\AddressManagement\Presentation\Dto\PersonDto;

readonly class AddressManagementPresentationService
{
    public function __construct(
        private AddressManagementDomainService $service
    ) {}

    /**
     * @return PersonDto[]
     */
    public function getAddresses(): array
    {
        $addresses   = $this->service->getAddresses();
        $addressDtos = [];

        foreach ($addresses as $address) {
            $addressDtos[] = new PersonDto(
                $address->id,
                $address->lastName,
                $address->firstName,
                $address->streetAddress,
                $address->city,
                $address->country
            );
        }

        return $addressDtos;
    }
}
