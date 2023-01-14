<?php

namespace App\Models;
use App\Models\parcel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class vehicle extends Model
{
    protected $table = 'vehicles';
    protected $primaryKey = 'id';
    protected $fillable = ['vehicle_num', 'vehicle_type', 'lisence','reneuve'];

    public function parcels()
    {
        return $this->hasMany(parcel::class, 'vehicle_type', 'vehicle_type');
    }
    
}
