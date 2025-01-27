<?php

class Role
{
    private int $id;
    private string $identity;

    // Mon constructeur
    public function __construct(int $id, string $identity)
    {
        $this->id = $id;
        $this->identity = $identity;
    }



    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getIdentity(): string
    {
        return $this->identity;
    }


    // Setters  
    public function setIdentity(int $identity): self
    {
        $this->identity = $identity;
        return $this;
    }
}
