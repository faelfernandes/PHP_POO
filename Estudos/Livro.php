<?php

require_once 'Publicacao.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes()
    {
        echo "<hr>";
        echo "Nome do Livro: {$this->getTitulo()}<br>";
        echo "O Autor do livro é: {$this->getAutor()}<br>";
        echo "E quem está lendo este livro é: {$this->leitor->getNome()}<br>";
        echo "Total de Páginas: {$this->totPaginas} \ Pag. Atual {$this->pagAtual}";
    }

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    private function getTitulo()
    {
        return $this->titulo;
    }
    private function getAutor()
    {
        return $this->autor;
    }
    private function getTotPaginas()
    {
        return $this->totPaginas;
    }
    private function getPagAtual()
    {
        return $this->pagAtual;
    }
    private function getAberto()
    {
        return $this->aberto;
    }
    private function getLeitor()
    {
        return $this->leitor;
    }

    private function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    private function setAutor($autor)
    {
        $this->autor = $autor;
    }
    private function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }
    private function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }
    private function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }
    private function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    public function abrir()
    {
        $this->aberto = true;
    }
    public function fechar()
    {
        $this->aberto = false;
    }
    public function folhear($p)
    {
        if ($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function avancarPag()
    {
        $this->pagAtual ++;
    }
    public function voltarPag()
    {
        $this->pagAtual --;
    }
}
