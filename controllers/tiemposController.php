<?php

class tiemposController
{
    public function Listar(string $men = "")
    {
        $mensaje = $men;
        require_once "./views/layouts/nav.php";
        require_once "./views/tiempos/listar.php";
    }
}