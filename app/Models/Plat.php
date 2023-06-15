<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];


    public function checkplat()
    {
        return $this->hasMany(CheckPlat::class,'id_plat');
    }
}
