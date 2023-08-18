<?php

namespace App\Models;

use CodeIgniter\Model;

class Zoo extends Model
{
    protected $table            = 'zoologico';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nombre','direccion','telefono'];
  
}
