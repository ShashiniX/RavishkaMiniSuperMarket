<?php

namespace App\Models;
use App\Models\driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parcel extends Model
{
    protected $table = 'parcels';
    protected $primaryKey = 'id';
    protected $guarded  = ['name', 'address', 'number','rname','raddress','rcontact' ,'weight' ,'height','length' ,'width','price','status','vehicle_type','code'];

    public function setCatAttribute($value)
    {
        $this->attributes['status'] = json_encode($value);
    }
  
    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['status'] = json_decode($value);
    }
}