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
        private Announcements  $announcements;
        private Views $views;
        private Role $role;
        private bool $isPro;
        private ?Adresses $adresses;
        private ?string $nampeCompany;



    }
