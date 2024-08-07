<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    public function etudiants(){
        return $this->hasMany(Etudiant::class);
    }

    public function matieres(){
        return $this->hasMany(Etudiant::class);
    }

    protected $guarded = [];

}
