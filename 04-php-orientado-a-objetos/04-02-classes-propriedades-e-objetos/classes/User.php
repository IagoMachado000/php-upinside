<?php

/**
 * Esse é uma classe para usuários
 */
class User
{

    // Propriedades públicas podem ser manipuladas pelo objeto
    public $firstName;
    public $lastName;
    public $mail;

    // Funções públicas podem ser usadas pela objeto
    public function getFirstName()
    {
        return $this->firstName;
    } 

    public function setFirstName($firstName)
    {
        $this->firstName = trim(htmlspecialchars(strip_tags($firstName), ENT_QUOTES, 'UTF-8'));
    }

    public function getLastName()
    {
        return $this->lastName;
    } 

    public function setLastName($lastName)
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
    public function setMail($mail)
    {
        $this->mail = $mail;
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }
}