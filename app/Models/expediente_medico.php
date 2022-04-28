<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expediente_medico extends Model
{
    use HasFactory;
    protected $table='TBL_EXPEDIENTE_MEDICO';
    protected $primaryKey='COD_EXPEDIENTE';
}
