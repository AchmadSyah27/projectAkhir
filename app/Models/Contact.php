<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // menentukan nama nama yang akan di whitelist
    // update: penambahan kolom photo, sehingga eloquent mengizinkan kita mengubah photo contact
    protected $fillable = [
        'name', 'email', 'address', 'company', 'phone', 'group_id', 'photo'
    ];

    public function group(){
        return $this->belongsTo('App\Models\Group');
    }
}