<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'type', 'start', 'finish', 'compan_id'
        
    ];

public function compan(){
    return $this->belongsTo(Compan::class);
}
}
