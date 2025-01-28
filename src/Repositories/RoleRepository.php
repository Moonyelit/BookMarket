<?php 

class RoleRepository extends AbstractRepository
{
 public function __construct()
 {
     parent::__construct();
 }

public function saveRole(Role $role): void
{
    $sql = "INSERT INTO role (identity)
            VALUES (:identity)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'identity' => $role->getIdentity(),
    ]);

}

}