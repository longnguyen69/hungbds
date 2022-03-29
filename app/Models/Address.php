<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'addresss';

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
