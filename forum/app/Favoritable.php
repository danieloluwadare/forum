<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 7/4/2017
 * Time: 4:00 PM
 */

namespace App;


trait Favoritable
{
    public static function bootFavoritable()
    {
        static::deleting(function($model){
           $model->favorites->each->delete();
        });
    }

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favorited');
    }

    public function favorite()
    {
        if(!$this->favorites()->where(['user_id'=>auth()->id()])->exists())
            return $this->favorites()->create(['user_id'=>auth()->id()]);
    }

    public  function unfavorite()
    {
        $attributes = ['user_id'=>auth()->id()];
        $this->favorites()->where($attributes)->get()->each->delete();
    }

    public function isFavorited()
    {
        return !! $this->favorites->where('user_id', auth()->id())->count();
    }

    public function getIsFavoritedAttribute()
    {
        return $this->isFavorited();
    }

    public function getFavoritesCountAttribute()
    {
        return$this->favorites->count();
    }
}