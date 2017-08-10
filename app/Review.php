<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 * @package App
 * @property mixed book
 * @property mixed user
 */
class Review extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
