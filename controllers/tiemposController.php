<?php

class tiemposController
{
    public function Listar(string $men = "test")
    {
        $mensaje = $men;
        require_once "./views/tiempos/listar.php";
    }
}