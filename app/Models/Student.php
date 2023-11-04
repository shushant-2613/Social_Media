<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function labcomputer(){
        return $this->hasOne(Labcomputer::class);
    }

    public function books()  {
        return $this->hasMany(Book::class);
    }
}
