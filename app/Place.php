<?php

namespace App;

// remember to use
use App\Favorite;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

    public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
            ->where('card_id', $this->id)
            ->first();
    }
}
