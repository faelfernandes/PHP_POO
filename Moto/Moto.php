<?php

require_once 'AcoesMoto.php';

class Moto implements AcoesMoto
{
    private $modelo;
    private $cor;
    private $cilindrada;
    private $gasolina;
    private $capacete;
    private $dono;
    private $pilotando;

    public function __construct($modelo, $cilindrada, $cor, $dono)
    {
        $this->modelo = $modelo;
        $this->cilindrada = $cilindrada;
        $this->cor = $cor;
        $this->gasolina = 50;
        $this->dono = $dono;
        $this->capacete = false;
        $this->pilotando = false;

        $this->dono->setHabilitado($this->dono->getHabilitado());
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function getCilindrada()
    {
        return $this->cilindrada;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function getGasolina()
    {
        return $this->gasolina;
    }
    public function getCapacete()
    {
        return $this->capacete;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function getPilotando()
    {
        return $this->pilotando;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function setGasolina($gasolina)
    {
        $this->gasolina = $gasolina;
    }
    public function setCapacete($capacete)
    {
        $this->capacete = $capacete;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
    }
    public function setPilotando($pilotando)
    {
        $this->pilotando = $pilotando;
    }

    public function colocarGasolina($qtd)
    {   
        $combustivel = $this->gasolina + $qtd;
        if ($combustivel >= 100) {
            $this->gasolina = 100;
            echo '<p>Enchi o tanque.</p>';
        } else {
            $this->gasolina = ($qtd + $this->getGasolina());
            echo "<p>Abasteci R$ {$qtd} em gasolina.</p>";
        }
    }
    public function andarMoto()
    {
        if ($this->dono->getHabilitado()) {
            echo '<p>Habilitado</p>';
            if ($this->getGasolina() <= 0) {
                echo '<p>Abasteça sua moto</p>';
            } elseif ($this->getCapacete() === false) {
                echo '<p>Coloque seu capacete!</p>';
            } else {
                $this->pilotando = true;
                echo '<p>Andando de moto</p>';
            }
        } else {
            echo '<p>Sem Habilitação</p>';
        }
    }
    public function descerMoto()
    {
        if ($this->getPilotando() === true) {
            $this->pilotando = false;
            echo '<p>Pare de pilotar a moto.</p>';
        } else {
            $this->pilotando = true;
            echo '<p>Você desceu da moto.</p>';
        }
    }
    public function tirarCapacete()
    {
        if ($this->getPilotando() === true) {
            $this->capacete = false;
            echo '<p>Você não pode tirar o capacete agora.</p>';
        } else {
            $this->capacete = true;
            echo '<p>Você tirou o capacete.</p>';
        }
    }
    public function colocarCapacete()
    {
        $this->capacete = true;
    }
    public function statusMoto()
    {
        echo "<p>Tanque Atual: {$this->getGasolina()}%.</p>";
    }
}
