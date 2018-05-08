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
        return (bool) Favorite::where('id', Auth::id())
            ->where('id', $this->id)
            ->first();
    }
}
