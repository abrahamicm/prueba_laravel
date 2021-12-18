<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'identification_card',
    ];
    public function vehicles():HasMany{
        return $this->hasMany(Vehicle::class);
    }
    public static $rules = [
        'name' => 'required',
        'email'=> 'required|email|unique:clients',
        'identification_card'=> 'required|unique:clients',
    ];
}
