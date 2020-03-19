<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'travel_packages_id', 'image'
  ];

  protected $hidden = [];

  public function travel_package()
  {
    return $this->belongsTo(
      TravelPackage::class, //model
      'travel_packages_id', //foregin key
      'id' //owner key
    );
  }
}
