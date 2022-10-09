<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Model as CarModel;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }
}
