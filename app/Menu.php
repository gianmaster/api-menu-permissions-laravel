<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = ['name', 'description', 'url', 'parent_id', 'icon_class', 'active'];
    
}
