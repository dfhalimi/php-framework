<?php

namespace App\AddressManagement\Presentation\Dto;

class PersonDto
{
    public function __construct(
        public string $id,
        public string $lastName,
        public string $firstName,
        public string $streetAddress,
        public string $city,
        public string $country
    ) {}
}
