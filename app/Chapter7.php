<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter7 extends Model
{
    protected $table="chapter7";
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
