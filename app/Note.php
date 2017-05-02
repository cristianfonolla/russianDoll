<?php

namespace App;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use Cacheable;

    /**
     * Relationships to touch, when updated.
     */
    protected $touches = ['card'];
    
    /**
     * A Note belongs to a card.
     */
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
