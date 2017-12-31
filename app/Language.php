<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

  public function snippets() {
    return $this->hasMany(Snippet::class);
  }

  // Update to freindly urls
  public function getRouteKeyName() {
    return 'name';
  }
}
