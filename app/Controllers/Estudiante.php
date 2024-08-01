<?php

namespace App\Controllers;
use App\Models\EstudianteModel;

class Estudiante extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new EstudianteModel();
        $data['estudiantes'] = $model->findAll();
        $data['message'] = $session->getFlashdata('message');
        return view('estudiante/index', $data);
    }

    public function insertar($nombre, $cedula)
    {
        $model = new EstudianteModel();
        $data = [
            'nombre' => $nombre,
            'cedula' => $cedula,
        ];
        $model->insert($data);
        session()->setFlashdata('message', 'Estudiante insertado exitosamente.');
        return redirect()->to('/estudiante');
    }

    public function eliminar($id)
    {
        $model = new EstudianteModel();
        $model->delete($id);
        session()->setFlashdata('message', 'Estudiante eliminado exitosamente.');
        return redirect()->to('/estudiante');
    }

    public function actualizar($id, $nombre, $cedula)
    {
        $model = new EstudianteModel();
        $data = [
            'nombre' => $nombre,
            'cedula' => $cedula,
        ];
        $model->update($id, $data);
        session()->setFlashdata('message', 'Estudiante actualizado exitosamente.');
        return redirect()->to('/estudiante');
    }
}
