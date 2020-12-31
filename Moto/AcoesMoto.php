<?php

interface AcoesMoto
{
    public function andarMoto();
    public function descerMoto();
    public function tirarCapacete();
    public function colocarCapacete();
    public function colocarGasolina($qtd);
}