<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khan extends Model
{
    use HasFactory;

    protected $table = "asim";
    protected $fillable =['name','email','password','cpassword'];
}
