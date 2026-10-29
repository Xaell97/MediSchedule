<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctors;

class specialties extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function doctors(): HasMany
    {
        return $table->hasMany(Doctor::class);
    }
}
