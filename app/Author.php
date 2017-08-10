<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 * @package App
 * @property mixed books
 */
class Author extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
