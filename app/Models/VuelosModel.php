<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VuelosModel extends Model
{
    use HasFactory;
    protected $table = "table_vuelos";
    protected $primaryKey = "numeroVuelo";
    protected $timestamp = false;
}
