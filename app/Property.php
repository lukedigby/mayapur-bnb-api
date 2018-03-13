<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'price'
    ];

    protected $appends = [
      'image'
    ];

    public function images()
    {
      return $this->belongsToMany('App\Image');
    }

    public function getImageAttribute()
    {
      return $this->images()->first()->url;
    }

}
