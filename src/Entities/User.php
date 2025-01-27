 <?php

    class User
    {
        private ?int $id;
        private ?string $image;
        private string $lastName;
        private string $firstName;
        private string $pseudo;
        private string $email;
        private string $password;
        private string $phoneNumber;
        private Role $role;
        private bool $isPro;
        private Adresses $personalAdress;
        private ?string $nampeCompany;
        private ?string $phoneNumberCompany;
        private ?Adresses $companyAdress;



        //Mes constructeurs 
        public function __construct(
            ?int $id,
            ?string $image,
            string $lastName,
            string $firstName,
            string $pseudo,
            string $email,
            string $password,
            string $phoneNumber,
            Role $role,
            bool $isPro,
            Adresses $personalAdress,
            ?string $nampeCompany,
            ?string $phoneNumberCompany,
            ?Adresses $companyAdress
        ) {
            $this->id = $id;
            $this->image = $image;
            $this->lastName = $lastName;
            $this->firstName = $firstName;
            $this->pseudo = $pseudo;
            $this->email = $email;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->phoneNumber = $phoneNumber;
            $this->role = $role;
            $this->isPro = $isPro;
            $this->personalAdress = $personalAdress;
            $this->nampeCompany = $nampeCompany;
            $this->phoneNumberCompany = $phoneNumberCompany;
            $this->companyAdress = $companyAdress ?? $personalAdress;
        }


        //Getters

        public function getFullName(): string
        {
            return $this->firstName . ' ' . $this->lastName;
        }

        public function getPseudo(): string
        {
            return $this->pseudo;
        }

        public function getEmail(): string
        {
            return $this->email;
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

        public function getNampeCompany(): ?string
        {
            return $this->nampeCompany;
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
