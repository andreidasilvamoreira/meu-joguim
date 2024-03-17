<?php
class Piqueiro extends Unidade
{
    public function vencerContra($outra_unidade)
    {
        return $outra_unidade instanceof Arqueiro;
    }
}
