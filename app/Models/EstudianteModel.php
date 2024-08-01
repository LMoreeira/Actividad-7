<?php

namespace App\Models;
use CodeIgniter\Model;

class EstudianteModel extends Model
{
    protected $table = 'estudiante';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'cedula'];
}
