<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAsientoModel extends Model
{
    use HasFactory;
    protected $primaryKey = "idTipoAsiento";
    protected $timestamp = false;
    protected $table = "table_tipo_asiento";
}
