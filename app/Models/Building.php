<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
//    use HasFactory;

    protected $table = 'buildings';

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
