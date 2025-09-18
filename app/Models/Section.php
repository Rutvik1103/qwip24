<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
      protected $fillable = ['section_name','title','content','order'];
    protected $casts = ['order' => 'integer'];
}
