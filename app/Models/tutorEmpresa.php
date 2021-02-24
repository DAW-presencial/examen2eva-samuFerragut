<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorEmpresa extends Model
{
    protected $fillable = [
        'empresa',
        'nom',
        'primer_llinatge',
        'segon_llinatge',
        'document_identitat',
        'pais_document',
        'provincia',
        'municipi',
        'estat',
        'telefon',
        'email'
    ];
}
