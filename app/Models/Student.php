<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =  [
        'name', 'email','image','compan_id','prenom','cv',
    ];
    public function compan(){
        return $this->belongsTo(Compan::class);
}

   
}
