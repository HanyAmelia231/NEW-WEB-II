<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_pengumuman extends Model
{
    //
    protected $fillable =['id', 'nama', 'users_id'];
    protected $table = 'kategori_pengumuman';
    protected $dates = ['created_at', 'updated_at'];
}
