<?php

namespace app\Models;
//Criando as seeds dos models

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atleta extends Model
{
    use HasFactory;

    public function user(){
return $this->belongsTo(User::class);
    }
}

