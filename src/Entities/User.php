<?php

    class User
    {
        private ?int $id;
        private ?string $image;
        private string $lastName;
        private string $firstName;
        private string $pseudo;
        private string $mail;
        private string $password;
        private string $phoneNumber;
        private Role $role;
        private bool $isPro;
        private Adresses $personalAdress;
        private ?string $nameCompany;
        private ?string $phoneNumberCompany;
        private ?Adresses $companyAdress;



        //Mes constructeurs 
        public function __construct(
            ?int $id,
            ?string $image,
            string $lastName,
            string $firstName,
            string $pseudo,
            string $mail,
            string $password,
            string $phoneNumber,
            Role $role,
            bool $isPro,
            Adresses $personalAdress,
            ?string $nameCompany,
            ?string $phoneNumberCompany,
            ?Adresses $companyAdress
        ) {
            $this->id = $id;
            $this->image = $image;
            $this->lastName = $lastName;
            $this->firstName = $firstName;
            $this->pseudo = $pseudo;
            $this->mail = $mail;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->phoneNumber = $phoneNumber;
            $this->role = $role;
            $this->isPro = $isPro;
            $this->personalAdress = $personalAdress;
            $this->nameCompany = $nameCompany;
            $this->phoneNumberCompany = $phoneNumberCompany;
            $this->companyAdress = $companyAdress ?? $personalAdress;
        }


        //Getters
        public function getId(): ?int
        {
            return $this->id;
        }

        public function getImage(): ?string
        {
            return $this->image;
        }

        public function getLastName(): string
        {
            return $this->lastName;
        }

        public function getFirstName(): string
        {
            return $this->firstName;
        }

        public function getPseudo(): string
        {
            return $this->pseudo;
        }

        public function getMail(): string
        {
            return $this->mail;
        }

        public function getPassword(): string
        {
            return $this->password;
        }

        public function getphoneNumber(): string
        {
            return $this->phoneNumber;
        }

        public function getRole(): Role
        {
            return $this->role;
        }

        public function isPro(): bool
        {
            return $this->isPro;
        }

        public function getPersonalAdress(): Adresses
        {
            return $this->personalAdress;
        }

        public function getNameCompany(): ?string
        {
            return $this->nameCompany;
        }

        public function setNameCompany(?string $nameCompany): self
        {
            $this->nameCompany = $nameCompany;
            return $this;
        }

        public function getPhoneNumberCompany(): ?string
        {
            return $this->phoneNumberCompany;
        }

        public function getCompanyAdress(): ?Adresses
        {
            return $this->companyAdress;
        }




    }
