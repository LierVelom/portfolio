<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = ['portfolio_id', 'user_id', 'parent_id', 'type_id', 'name', 'url', 'alt_text', 'size'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(Resource::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Resource::class, 'parent_id');
    }

    public function type()
    {
        return $this->belongsTo(ResourceType::class, 'type_id');
    }
}
