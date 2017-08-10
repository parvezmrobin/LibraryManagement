<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 * @package App
 * @property mixed user
 */
class Admin extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
