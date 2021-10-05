<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Buku extends Model
{
    protected $table = 'buku';
    protected $dates = ['tgl_terbit'];
    // public function getCreateAttribute(){
    //     return Carbon::parse($this->attributes['created_at'])
    //     ->translateFormat('l, d F Y');
    // }
}
