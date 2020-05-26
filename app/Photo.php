<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = array('gurume_id');
    protected $primaryKey = 'gurume_id';

    public static $rules = array(
        'title' => 'required',
        'photo' => 'file|image',
        'coment' => 'filled',
    );
    // public function getData(){
    //     return $this->gurume_id;
    // }
}
