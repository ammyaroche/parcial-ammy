<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Autor;


class ControladorAutor extends BaseController
{
    public function verAutor() {
        $artista_id = new Autor();
        $datosbd['autorbd'] = $artista_id->findAll();
        return view('Autores', $datosbd);
    }
    //agregaar
   
    public function agregarAutor()
    {
        $autor = new Autor();
        $datos=
        [
            'artista_id'=>$this->request->getPost('txt_artista'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'fecha_nacimiento'=>$this->request->getPost('txt_fechana'),
            'fecha_muerte'=>$this->request->getPost('txt_fechamu'),
            'pais_id'=>$this->request->getPost('txt_pais'),
        ];

        print_r($datos);

        $autor->insert($datos);      
        return redirect()->route('ver_autor');
    }
    //eliminar  

    
    public function eliminarAutor($artista = null)
    {
        $artista_id = new Autor();
        $artista_id->delete($artista);

        $datosbd['autorbd'] = $artista_id->findAll();
        return view('Autores', $datosbd);
    }
    //ver datos
    public function verDatosAutor($artista = null)
    {
        $artista_id = new Autor();
        $datosbd['autorbd'] = $artista_id->where('artista_id', $artista)->first();
        return view('frm_actualizar_autor', $datosbd);
    }
    //actualizar
    public function actualizarAutor()
    {
        $artista_id = new Autor();
        $artista = $this->request->getVar('txt_artista');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $fecha_na = $this->request->getVar('txt_fechana');
        $fecha_mu = $this->request->getVar('txt_fechamu');
        $pais = $this->request->getVar('txt_pais');

        $datosbd = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'fecha_nacimiento' => $fecha_na,
            'fecha_muerte' => $fecha_mu,
            'pais_id' => $pais,
        ];
        $artista_id->update($artista, $datosbd);

        $datosbd['autorbd'] = $artista_id->findAll();
        return view('Autores', $datosbd);
    }
}
