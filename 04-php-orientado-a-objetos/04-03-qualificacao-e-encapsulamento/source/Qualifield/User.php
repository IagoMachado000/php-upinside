<?php

class User
{
    // Propriedades privadas não podem ser manipuladas pelo objeto, apenas pela própria classe e suas heranças
    private $firstName;
    private $lastName;
    private $mail;

    private $error;

    public function setUser($fName, $lName, $mail)
    {
        $this->setFirstName($fName);
        $this->setLastName($lName);
        
        if (!$this->setMail($mail)) {
            $this->error = "O email {$this->getMail()} não é válido";
            return false;
        }

        return true;
    }

    public function getError()
    {
        return $this->error;
    }

    // Funções públicas podem ser usadas pela objeto
    public function getFirstName()
    {
        return $this->firstName;
    } 

    private function setFirstName($firstName)
    {
        $this->firstName = trim(htmlspecialchars(strip_tags($firstName), ENT_QUOTES, 'UTF-8'));
    }

    public function getLastName()
    {
        return $this->lastName;
    } 

    private function setLastName($lastName)
    {
        $this->lastName = trim(htmlspecialchars(strip_tags($lastName), ENT_QUOTES, 'UTF-8'));
    }

    public function getMail()
    {
        return $this->mail;
    } 

    /**
     * Define o email do usuário e valida em um formato válido
     */
    private function setMail($mail)
    {
        $this->mail = $mail;
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }
}