<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Publisher
 * @package App
 * @property mixed book
 */
class Publisher extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
