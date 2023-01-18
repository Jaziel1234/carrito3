<?php

namespace App\Models;
use App\Models\User;
use App\Models\Detail;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function client(){
        return $this-> belongsTo(Client::class);
    }

    public function detail(){
        return $this-> belongsTo(Detail::class);
    }
    public function order(){
        return $this-> belongsTo(Order::class);
    }
}
