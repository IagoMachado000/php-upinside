<?php

namespace Source\Interpretation;

class User
{
    private $fName;
    private $lName;
    private $email;

    /**
     * O método __construct é executado automaticamente quando instanciamos a
     * classe, ou seja, ele é executado através do operado new
     */
    public function __construct($fName, $lName, $email)
    {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->email = $email;
    }

    /**
     * Quando clonamos um objeto, ele trás consigo, os valores do objeto
     * clonado, para que isso não ocorra, podemos modificar o método clone
     */
    public function __clone()
    {
        $this->fName = null;
        $this->lName = null;
        echo '<p class="trigger">Clonou</p>';
    }

    /**
     * O método __destruct é executado ao final da execução de um objeto, nesse
     * momento, o objeto é destruído
     */
    public function __destruct()
    {
        echo '<pre>';
        var_dump($this);
        echo '</pre>';

        echo "<p class='trigger accept'>O objeto {$this->fName} foi destruído</p>";
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function setFName($fName)
    {
        return $this->fName = $fName;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function getEmail()
    {
        return $this->email;
    }
}