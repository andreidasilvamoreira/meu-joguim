<?php
abstract class Unidade
{
    protected $vida;
    protected $armadura;
    protected $ataque;

    public function __construct($vida, $ataque, $armadura)
    {
        $this->vida = $vida;
        $this->ataque = $ataque;
        $this->armadura = $armadura;
    }

    abstract public function atacarContra($outra_unidade);

    abstract public function vence($outra_unidade);
}