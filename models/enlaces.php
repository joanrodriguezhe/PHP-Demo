<?php
class EnlacesPaginas
{
    public function enlacesPaginasModel($enlaces)
    {

        if (
            $enlaces == 'ingresar' ||
            $enlaces == 'usuarios' ||
            $enlaces == 'editar' ||
            $enlaces == 'salir'
        ) {
            $module = "views/modules/" . $enlaces . ".php";
        } else {
            $module = "views/modules/registro.php";
        }

        return $module;
    }
}
