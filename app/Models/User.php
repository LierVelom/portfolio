<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function itemTypes()
    {
        return $this->hasMany(ItemType::class);
    }
}
