<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Place extends Model

{
    //

    public function up()
    {
        Schema::create('favouriteables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('favouriteable_id');
            $table->string('favouriteable_type');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function favourites()
    {
        return $this->morphToMany(User::class, 'favouriteable');
    }

    public function favouritedBy(User $user)
    {
        return $this->favourites->contains($user);
    }
}
