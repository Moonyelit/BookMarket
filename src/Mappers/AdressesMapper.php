<?php

class AdressesMapper
{
    public static function mapToObject(array $datas)
    {
        return new Adresses(
            $datas['id'],
            $datas['street'],
            $datas['city'],
            $datas['postalCode'],
            $datas['country'],
        );
    }

    public static function mapToArray(Adresses $adress)
    {
        return [
            'id' => $adress->getId(),
            'street' => $adress->getStreet(),
            'city' => $adress->getCity(),
            'postalCode' => $adress->getPostalCode(),
            'country' => $adress->getCountry(),
        ];
    }
}