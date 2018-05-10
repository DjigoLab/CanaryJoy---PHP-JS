<?php

namespace App;

use App\Place;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function favouriteProducts()
    {
        return $this->morphedByMany(Place::class, 'favouriteable')
            ->withPivot(['created_at'])
            ->orderBy('pivot_created_at');
    }

    public function index(Request $request)
    {
        $places = $request->user()->favouriteProducts()->paginate(5);

        return view('fav', compact('places'));
    }
}
