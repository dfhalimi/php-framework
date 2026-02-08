<?php

declare(strict_types=1);

namespace App\AddressManagement\Domain\Entity;

class Person
{
    public function __construct(
        int    $id,
        string $lastName,
        string $firstName,
        string $streetAddress,
        string $city,
        string $country
    ) {
        $this->id      = $id;
        $this->lastName      = $lastName;
        $this->firstName     = $firstName;
        $this->streetAddress = $streetAddress;
        $this->city          = $city;
        $this->country       = $country;
    }

    public int $id {
        get {
            return $this->id;
        }
    }

    public string $lastName {
        get {
            return $this->lastName;
        }
        set {
            $this->lastName = $value;
        }
    }

    public string $firstName {
        get {
            return $this->firstName;
        }
        set {
            $this->firstName = $value;
        }
    }

    public string $streetAddress {
        get {
            return $this->streetAddress;
        }
        set {
            $this->streetAddress = $value;
        }
    }

    public string $city {
        get {
            return $this->city;
        }
        set {
            $this->city = $value;
        }
    }

    public string $country {
        get {
            return $this->country;
        }
        set {
            $this->country = $value;
        }
    }
}
