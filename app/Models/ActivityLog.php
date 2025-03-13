<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActivityLog extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id',
        'portfolio_id',
        'action',
        'model_type',
        'model_id',
        'changes',
    ];

    protected $casts = [
        'changes' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function portfolio() {
        return $this->belongsTo(Portfolio::class);
    }
}