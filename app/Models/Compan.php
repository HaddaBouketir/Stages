<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compan extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'name', 'email',
    ];
    public function students(){
        return $this->belongsTo(Student::class);
}
public function stages(){
    return $this->belongsTo(Stage::class);
}
}
