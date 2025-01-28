<?php

final class UserRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findByEmail(string $mail):?User
    {
        $sql = "SELECT * FROM user WHERE mail = :mail";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['mail' => $mail]);
        $UserData = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$UserData){
            return null;
        }
        return UserMapper::mapToObject($UserData);

    }

    public function deleteUser (string $mail) : void
    {
        $sql = "DELETE FROM user WHERE mail = :mail";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['mail' => $mail]);
    }

    public function updateUser (User $user): void
    {
        $sql = "UPDATE user 
            SET last_name = :last_name,
                first_name = :first_name,
                pseudo = :pseudo,
                mail = :mail,
                password = :password
            WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'last_name' => $user->getLastName(),
            'first_name' => $user->getFirstName(),
            'pseudo' => $user->getPseudo(),
            'mail' => $user->getMail(),
            'password' => $user->getPassword(),
            'id' => $user->getId()
        ]);
    }

    public function saveUser(User $user): void
    {
        $sql = "INSERT INTO user (image, last_name, first_name, pseudo, mail, password, phone_number, id_role, isPro, id_adresses, name_compagny, phone_company, id_adress_company)
                VALUES (:image, :last_name, :first_name, :pseudo, :mail, :password, :phone_number, :id_role, :isPro, :id_adresses, :name_compagny, :phone_company, :id_adress_company)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'image' => $user->getImage(),
            'last_name' => $user->getLastName(),
            'first_name' => $user->getFirstName(),
            'pseudo' => $user->getPseudo(),
            'mail' => $user->getMail(),
            'password' => $user->getPassword(),
            'phone_number' => $user->getPhoneNumber(),
            'id_role' => $user->getRole()->getId(),
            'isPro' => $user->isPro(),
            'id_adresses' => $user->getPersonalAdress()->getId(),
            'name_compagny' => $user->getNameCompany(),
            'phone_company' => $user->getPhoneNumberCompany(),
            'id_adress_company' => $user->getCompanyAdress() ? $user->getCompanyAdress()->getId() : $user->getPersonalAdress()->getId()
        ]);
    }
}