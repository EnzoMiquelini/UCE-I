<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Images extends Model
{
    protected $table = 'images';
    protected $fillable = [
        'work_id',
        'name',
        'path',
    ];

    public function work(): BelongsTo
    {
        return $this->belongsTo(Work::class);
    }
}
