<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{

  protected $fillable = [
      'description',
      'snippet',
  ];

  public function snippet() {
    return $this->belongsToMany(Snippet::class);
  }

}
