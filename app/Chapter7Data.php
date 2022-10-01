<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter7Data extends Model
{
    protected $table="chapter7_data";
    protected $fillable=['name','category','case_no','description','file','user_id','sender_id'];

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
