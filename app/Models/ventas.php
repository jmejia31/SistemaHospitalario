<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;
    protected $table='TBL_VENTAS';
    protected $primaryKey='COD_VENTA';
}
