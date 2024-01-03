<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $table = 'ordonnances';
    protected $primaryKey = 'id';
    protected $fillable = ['patient_id', 'medicament', 'observation','dateobservation'];
}
