<?php 

final class AdressesRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function saveAdress(Adresses $adress): void
    {
        $sql = "INSERT INTO adresses (street, city, postal_code, country)
                VALUES (:street, :city, :postal_code, :country)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'street' => $adress->getStreet(),
            'city' => $adress->getCity(),
            'postal_code' => $adress->getPostalCode(),
            'country' => $adress->getCountry()
        ]);
    }

}