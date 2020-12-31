<?php

require_once 'AcoesVideo.php';

Class Video implements AcoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function like()
    {
        $this->curtidas ++;
    }
    public function play()
    {
        $this->reproduzindo = true;
    }
    public function pause()
    {
        $this->reproduzindo = false;
    }
    // Construtor
    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }
    // Métodos Gets
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAvaliacao()
    {
        return $this->avalicao;
    }
    public function getViews()
    {
        return $this->views;
    }
    public function getCurtidas()
    {
        return $this->curtidas;
    }
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    // Métodos Sets
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setAvaliacao($avaliacao)
    {
        $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
    }
    public function setViews($views)
    {
        $this->views = $views;
    }
    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
    }
}
