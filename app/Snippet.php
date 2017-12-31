<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{

  protected $fillable = [
      'title',
      'language_id',
      'description',
      'snippet',
  ];

  public function tags() {
    return $this->belongsToMany(Tag::class);
  }

  public function examples() {
    return $this->belongsToMany(Example::class);
  }

  public function language() {
    return $this->belongsTo(Language::class);
  }

}
