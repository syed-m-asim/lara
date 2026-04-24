<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class khan extends Model
{
    use HasFactory;
    protected $fillable =['name','password','cpassword'];
}
