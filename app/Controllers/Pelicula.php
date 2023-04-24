<?php

namespace App\Controllers;

class Pelicula extends BaseController
{
    public function index()
    {
        $data = [
            'nombreVariableVista' => 'Contenido',
            'nombreVariableVista2' => 5,
            'miArray' => ['Nosotros','Contacto','Noticias','Productos','Proximamente']
        ];
        return view('index', $data);
    }
}
