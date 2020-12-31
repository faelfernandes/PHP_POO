<?php

require_once 'Pessoa.php';

class Habilitado extends Pessoa
{
    private $habilitado;
    private $categoria;

    public function __construct($nome, $idade, $sexo, $categoria = null)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->categoria = $categoria;

        if ($this->categoria) {
            $this->habilitado = true;
        } else {
            $this->habilitado = false;
        }
    }

    public function getHabilitado()
    {
        return $this->habilitado;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
}
