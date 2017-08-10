<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Issue
 * @package App
 * @property mixed book
 * @property mixed user
 */
class Issue extends Model
{
    protected $dates = ['return_date'];
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
