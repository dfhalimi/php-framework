<?php

declare(strict_types=1);

namespace App\AddressManagement\Presentation\Dto;

class PersonDto
{
    public function __construct(
        public int    $id,
        public string $lastName,
        public string $firstName,
        public string $streetAddress,
        public string $city,
        public string $country
    ) {}
}
