<?php
abstract class Unidade
{
    protected $vida;
    protected $armadura;
    protected $ataque;

    public function __construct(int $vida, int $ataque, int $armadura)
    {
        $this->vida = $vida;
        $this->ataque = $ataque;
        $this->armadura = $armadura;
    }

    abstract public function vencerContra($outra_unidade);
}
