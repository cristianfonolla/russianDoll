<?php

namespace App;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use Cacheable;
    /**
     * A card can have many notes.
     */
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
