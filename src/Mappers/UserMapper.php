<?php

class UserMapper 
{
    public static function mapToObject(array $datas)
    {
        $isPro = $datas['isPro'] ?? false; // Définir $isPro
        $Adresses = $datas['Adresses'] ?? []; // Définir $Adresses

        return new User(
            $datas['id'],
            $datas['image'],
            $datas['last_name'],
            $datas['first_name'],
            $datas['pseudo'],
            $datas['mail'],
            $datas['password'],
            $datas['phoneNumber'],
            new Role($datas['role_id'], $datas['role_name']),
            $isPro,
            $Adresses[0] ?? null,
            $datas['nameCompany'] ?? null,
            $datas['phoneNumberCompany'] ?? null,
            $Adresses[1] ?? null
        );
    }

    public static function mapToArray(User $user)
    {
        return [
            'id' => $user->getId(),
            'image' => $user->getImage(),
            'last_name' => $user->getLastName(),
            'first_name' => $user->getFirstName(),
            'pseudo' => $user->getPseudo(),
            'mail' => $user->getMail(),
            'password' => $user->getPassword(),
            'phoneNumber' => $user->getPhoneNumber(),
            'role_id' => $user->getRole()->getId(),
            'isPro' => $user->isPro(),
            'id_adresses' => AdressesMapper::mapToArray($user->getPersonalAdress()),
            'name_compagny' => $user->getNameCompany(),
            'phone_company' => $user->getPhoneNumberCompany(),
            'id_adress_company' => $user->getCompanyAdress() ? AdressesMapper::mapToArray($user->getCompanyAdress()) : null
        ];
    }
}