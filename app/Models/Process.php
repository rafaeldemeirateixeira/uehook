<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Process extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var array
     */
    public $fillable = [
        'job_uuid',
        'attempt',
        'message'
    ];

    /**
     * Get the parent processalbe model
     *
     * @return MorphTo
     */
    public function processable()
    {
        return $this->morphTo();
    }
}
