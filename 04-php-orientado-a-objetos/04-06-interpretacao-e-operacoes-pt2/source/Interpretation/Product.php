<?php

namespace Source\Interpretation;

class Product
{
    public $name;
    private $price;
    private $data;

    /**
     * O método __set impossibilita a criação de propriedades não existentes
     * dentro do objeto
     * 
     * Ele é executado sempre que tentamos manipular uma propriedade que esta
     * inacessível, seja por sua visibilidade ou não existir na classe
     */
    public function __set($name, $value)
    {
        $this->notFound(__FUNCTION__, $name);
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (!empty($this->data[$name])) {
            return $this->data[$name];
        } else {
            $this->notFound(__FUNCTION__, $name);
        }
    }

    public function __isset($name)
    {
        $this->notFound(__FUNCTION__, $name);
    }

    public function __call($name, $arguments)
    {
        $this->notFound(__FUNCTION__, $name);

        echo '<pre>';
        var_dump($arguments);
        echo '</pre>';
    }

    public function __toString()
    {
        return "<p class='trigger'>Esse é um objeto da classe " . __CLASS__ . "</p>";
    }

    public function __unset($name)
    {
        trigger_error(__FUNCTION__ . ": Acesso negado a propriedade {$name}", E_USER_ERROR);
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param String $name Nome do produto
     * @param Float $price Preço do produto
     * @return type
     * @throws conditon
     **/
    public function handler($name, $price)
    {
        $this->name = $name;
        $this->price = number_format($price, 2, '.', ',');
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
    private function notFound($method, $name)
    {
        echo "<p class='trigger error'>{$method}: A propriedade {$name} não existe em " . __CLASS__ . "</p>";
    }
}