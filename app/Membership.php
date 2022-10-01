<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table="memberships";
    protected $fillable=['first_name','last_name','email','phone','dob','address','subject','city','state','zipcode','fee'];
}
