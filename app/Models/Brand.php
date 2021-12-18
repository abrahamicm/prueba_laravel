<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    protected $fillable=[
        'name'
    ];
    public static $rules = [
        'name' => 'required',
    ];
    
    public function vehicles():HasMany{
        return $this->hasMany(Vehicle::class);
    }

    public function scopeListbrands()
    {
        $a = [];
        foreach (Vehicle::all() as $k => $v) {
            $marca = ucfirst($v->brand->name);
            $v->brand_name = $marca;
            $a[] = $v;
        }
        $c = collect($a);

        return  $c->countBy("brand_name")->all();
    }
}
