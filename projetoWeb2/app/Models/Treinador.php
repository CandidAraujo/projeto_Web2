<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treinador extends Model
{
    use HasFactory;

    public function user(){
return $this->belongsTo(User::class);
    }
}

