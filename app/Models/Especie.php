<?php

namespace App\Models;

use CodeIgniter\Model;

class Especie extends Model
{
    protected $table            = 'especie';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nombre','nom_cientifico','edad','zoologico'];

}
