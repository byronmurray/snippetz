<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{

  protected $fillable = [
      'title',
      'description',
      'snippet',
      'language',
  ];

  public function tags() {
    return $this->belongsToMany(Tag::class);
  }

  public function examples() {
    return $this->belongsToMany(Example::class);
  }

}
