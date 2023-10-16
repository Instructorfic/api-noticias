<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ControladorNoticia extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        
        $modeloNoticia = model('ModeloNoticia');
        $datos['noticias'] = $modeloNoticia->findall(); //Se recuperan los datos de la tbla usuarios y se almacenan en el arreglo datos.
        return $this->respond($datos); //Se regresa respuesta con los usuarios
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $modeloNoticia = model('ModeloNoticia');
        $noticia = $modeloNoticia->getWhere(['id_noticia' => $id])->getResult();
        if($noticia){
            return $this->respond($noticia);
        }else{
            return $this->failNotFound('Recurso no encontrado con el identificador '.$id);
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $modeloNoticia = model('ModeloNoticia');

        $datos = [
            'titulo' => $this->request->getVar('titulo'),
            'descripcion' => $this->request->getVar('descripcion'),
            'autor' => $this->request->getVar('autor'),
            'categoria' => $this->request->getVar('categoria'),
            'fecha_publicacion' => $this->request->getVar('fecha_publicacion'),
            'enlace_imagen' => $this->request->getVar('enlace_imagen'),
            'enlace_noticia' => $this->request->getVar('enlace_noticia'),
            'etiquetas' => $this->request->getVar('etiquetas'),
        ]; //Se obtienen los datos del usuario desde la solicitud(request)

        $modeloNoticia->insert($datos); // Se realiza inserción de datos en la tabla usuarios 

        $respuesta = [
            'estatus' => 201,
            'error' => null,
            'mensaje' => ['satisfactorio' => 'Recurso almacenado satisfactoriamente']
        ];

        return $this->respondCreated($respuesta,201);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $modeloNoticia = model('ModeloNoticia');

        $datosSolicitud  = $this->request->getJSON();

        $datosActualizar = [
            'titulo' => $datosSolicitud->titulo,
            'descripcion' => $datosSolicitud->descripcion,
            'autor' => $datosSolicitud->autor,
            'categoria' => $datosSolicitud->categoria,
            'fecha_publicacion' => $datosSolicitud->fecha_publicacion,
            'enlace_imagen' => $datosSolicitud->enlace_imagen,
            'enlace_noticia' => $datosSolicitud->enlace_noticia,
            'etiquetas' => $datosSolicitud->etiquetas
        ];

        $modeloNoticia->update($id,$datosActualizar);

        $respuesta = [
            'estatus' => 200,
            'error' => null,
            'mensaje' => ['satisfactorio' => 'Recurso actualizado satisfactoriamente']
        ];

        return $this->respond($respuesta);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $modeloNoticia = model('ModeloNoticia');


        $noticia = $modeloNoticia->find($id);

        if($noticia){
            $modeloNoticia->delete($id);

            $respuesta = [
            'estatus' => 200,
            'error' => null,
            'mensaje' => ['satisfactorio' => 'Recurso eliminado satisfactoriamente']
            ];

            return $this->respondDeleted($respuesta);
        }else{
            return $this->failNotFound('Recurso no encontrado con el identificador '.$id);
        }
    }
}
