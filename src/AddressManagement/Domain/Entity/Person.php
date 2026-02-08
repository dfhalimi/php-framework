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

    private int $id {
        get {
            return $this->id;
        }
    }

    private string $lastName {
        get {
            return $this->lastName;
        }
        set {
            $this->lastName = $value;
        }
    }

    private string $firstName {
        get {
            return $this->firstName;
        }
        set {
            $this->firstName = $value;
        }
    }

    private string $streetAddress {
        get {
            return $this->streetAddress;
        }
        set {
            $this->streetAddress = $value;
        }
    }

    private string $city {
        get {
            return $this->city;
        }
        set {
            $this->city = $value;
        }
    }

    private string $country {
        get {
            return $this->country;
        }
        set {
            $this->country = $value;
        }
    }

    public function getFullName(): string
    {
        return "$this->firstName $this->lastName";
    }
}
