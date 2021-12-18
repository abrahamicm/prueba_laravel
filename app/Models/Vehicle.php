<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_name','client_id','brand_id','type_vehicle_id','license_plate'
    ];
    public static $rules = [
        'model_name' => 'required',
        'license_plate' => 'required|unique:vehicles',
        'client_id' => 'required',
        'brand_id' => 'required',
        'type_vehicle_id' => 'required'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function type_vehicle(): BelongsTo
    {
        return $this->belongsTo(TypeVehicle::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }



    public function getUcBrandAttribute($value)
    {
        return ucfirst('gola' . $this->brand->name);
    }

    public function scopeLicense($query, $license)
    {
        if ($license) {
            return $query->where('license_plate', 'LIKE', "%$license%");
        }
    }

    public function scopeOwner($query, $owner_name)
    {
        if ($owner_name) {
            $filter = function ($q) use ($owner_name) {
                $q->where('name', 'LIKE', "%$owner_name%");
            };

            return $query->whereHas('client', $filter)->with(['client' => $filter]);
        }
    }
    public function scopeIdentification($query, $identification)
    {
        if ($identification) {
            $filter = function ($q) use ($identification) {
                $q->where('identification_card', 'LIKE', "%$identification%");
            };

            return $query->whereHas('client', $filter)->with(['client' => $filter]);
        }
    }
}
