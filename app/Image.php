<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'product_images';
    protected $fillable = [
      'product_id','image_name','image_type'
    ];
}
