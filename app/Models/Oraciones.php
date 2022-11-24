<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oraciones extends Model
{
    use HasFactory;
    public function __construct(Palabra $palabra)
    {
        $this->Palabra = $palabra;
    }
}
