<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'dateNaissance',
       'specialite',
       'numCarte',
       'numSocial',
        'numTel',
        'diplome',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
