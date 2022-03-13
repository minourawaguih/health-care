<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
  protected $fillable = ["name","created_at", "updated_at"];
}
