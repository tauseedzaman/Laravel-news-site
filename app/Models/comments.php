<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class comments extends Model
{
    protected $fillable=[
        'post_id',
        'user_id',
        'content',
    ];

    /**
     * Get the user that owns the comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'id', 'user_id');
    }


    /**
     * Get the post that owns the comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(post::class,'id', 'post_id');
    }

    use HasFactory;
}
