<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaniaAerea extends Model
{
    use HasFactory;
    public $Avion;

    public function __construct()
    {
    }
  
}
