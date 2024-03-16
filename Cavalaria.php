<?php
class Cavalaria extends Unidade
{
    public function atacarContra($outra_unidade)
    {
        return $this->vence($outra_unidade);
    }

    public function vence($outra_unidade)
    {
        return $outra_unidade instanceof Piqueiro;
    }
}