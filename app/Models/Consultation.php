<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $table = 'consultations';
    protected $primaryKey = 'id';
    protected $fillable = ['patient_id', 'medecin_id', 'facture_id', 'date_consultation'];
}
