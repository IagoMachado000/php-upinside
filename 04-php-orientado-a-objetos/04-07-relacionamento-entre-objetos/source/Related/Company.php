<?php

namespace Source\Related;

class Company
{
    private $company;

    /**
     * @var Address
     * 
     * A propriedade address está fazendo referência a classe Address
     */
    private $address;

    private $team;
    private $products;

    public function bootCompany($company, $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    /**
     * A referenciação da classe é feita pela injeção de dependência Address
     */
    public function boot($company, Address $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    /**
     * O objeto náo está associado a propriedade, mas o método precisa dele para
     * que possamos construir a propriedade
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    /**
     * A composição ocorre quando um objeto constrói outro objeto
     */
    public function addTeamMember($job, $fn, $ln)
    {
        $this->team[] = new \Source\Related\User($job, $fn, $ln);
    }

    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }
}