<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

  public function snippets() {
    return $this->belongsToMany(Snippet::class);
  }

  // Update to freindly urls
  public function getRouteKeyName() {
    return 'name';
  }

}
