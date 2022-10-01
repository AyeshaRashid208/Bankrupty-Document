<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bankrupty extends Model
{
    protected $table="bankruptys";
    protected $fillable=['name','category','number','description','file', 'user_id'];

    public function setFileAttribute($file)
    {
        if ($file) {
            $name = time().'.'.$file->extension();
            $file->storeAs('public', $name);
            $this->attributes['file'] = $name;
        }
    }

    public function getFileAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
