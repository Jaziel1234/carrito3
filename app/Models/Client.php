<?php

namespace App\Models;
use App\Models\User;
use App\Models\Detail;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function products(){
        return $this-> hasMany(Product::class);
    }
    public function orders(){
        return $this-> hasMany(Order::class);
    }
    public function detail(){
        return $this-> hasOne(Detail::class);
    }
}
