<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    use HasFactory;
    public function __construct(Parrafo $parrafo)
    {
        $this->Parrafo = $parrafo;
    }
}
