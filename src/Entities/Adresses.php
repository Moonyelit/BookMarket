<?php

class Adresses
{
    private int $id;
    private string $street;
    private string $city;
    private string $postalCode;
    private string $country;


    //Mon constructeur

    public function __construct(int $id, string $street, string $city, string $postalCode, string $country)
    {
        $this->id = $id;
        $this->street = $street;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->country = $country;
    }


    //Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    //Setters
    public function setStreet(string $street): self
    {
        $this->street = $street;
        return $this;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }

}
