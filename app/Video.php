<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
public function tags()
  {
    return $this->morphToMany(Tag::class, 'taggable');
  }
}
