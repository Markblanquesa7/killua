<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'price',
        'regular',
        'vertex',
        'flexible',
    ];
    protected $casts = [
        'price' => 'boolean',
        'regular' => 'boolean',
        'vertex' => 'boolean',
        'flexible' => 'boolean',
    ];
    public function service(): HasMany
    {
        return $this->HasMany(Service::class);
    }
}
