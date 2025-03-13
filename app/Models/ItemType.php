<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'description'];

    public function items()
    {
        return $this->hasMany(Item::class, 'type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}